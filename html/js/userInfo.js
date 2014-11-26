/**
 * Created by ryan on 11/24/14.
 */
define(function(require, exports, module) {
    require("jQuery");
    require("datePicker");
    function getIdCardInfo(cardNo) {
        var info = {
            isTrue : false,
            year : null,
            month : null,
            day : null,
            isMale : false,
            isFemale : false
        };
        if (!cardNo && 15 != cardNo.length && 18 != cardNo.length) {
            info.isTrue = false;
            return info;
        }
        if (15 == cardNo.length) {
            var year = cardNo.substring(6, 8);
            var month = cardNo.substring(8, 10);
            var day = cardNo.substring(10, 12);
            var p = cardNo.substring(14, 15); //性别位
            var birthday = new Date(year, parseFloat(month) - 1,
                parseFloat(day));
            // 对于老身份证中的年龄则不需考虑千年虫问题而使用getYear()方法
            if (birthday.getYear() != parseFloat(year)
                || birthday.getMonth() != parseFloat(month) - 1
                || birthday.getDate() != parseFloat(day)) {
                info.isTrue = false;
            } else {
                info.isTrue = true;
                info.year = birthday.getFullYear();
                info.month = birthday.getMonth() + 1;
                info.day = birthday.getDate();
                if (p % 2 == 0) {
                    info.isFemale = true;
                    info.isMale = false;
                } else {
                    info.isFemale = false;
                    info.isMale = true
                }
            }
            return info;
        }
        if (18 == cardNo.length) {
            var year = cardNo.substring(6, 10);
            var month = cardNo.substring(10, 12);
            var day = cardNo.substring(12, 14);
            var p = cardNo.substring(14, 17)
            var birthday = new Date(year, parseFloat(month) - 1,
                parseFloat(day));
            // 这里用getFullYear()获取年份，避免千年虫问题
            if (birthday.getFullYear() != parseFloat(year)
                || birthday.getMonth() != parseFloat(month) - 1
                || birthday.getDate() != parseFloat(day)) {
                info.isTrue = false;
                return info;
            }
            var Wi = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];// 加权因子
            var Y = [ 1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2 ];// 身份证验证位值.10代表X
            // 验证校验位
            var sum = 0; // 声明加权求和变量
            var _cardNo = cardNo.split("");
            if (_cardNo[17].toLowerCase() == 'x') {
                _cardNo[17] = 10;// 将最后位为x的验证码替换为10方便后续操作
            }
            for ( var i = 0; i < 17; i++) {
                sum += Wi[i] * _cardNo[i];// 加权求和
            }
            var i = sum % 11;// 得到验证码所位置
            if (_cardNo[17] != Y[i]) {
                return info.isTrue = false;
            }
            info.isTrue = true;
            info.year = birthday.getFullYear();
            info.month = birthday.getMonth() + 1;
            info.day = birthday.getDate();
            if (p % 2 == 0) {
                info.isFemale = true;
                info.isMale = false;
            } else {
                info.isFemale = false;
                info.isMale = true
            }
            return info;
        }
        return info;
    }
    var common = require("common");
    $(function(){

        //calendar
        $("#birthday").datepicker();

        //idCard
        var sinogramCheck = function(obj){
            if(common.sinogram(obj.val())){
                obj.siblings(".danger").addClass("disn");
                return true;
            }else{
                obj.siblings(".danger").removeClass("disn");
                return false;
            }
        }
        var realName = $("#realName");
        realName.blur(function(){
            sinogramCheck($(this));
        });

        var idNumberCheck = function(obj){
            if(getIdCardInfo(obj.val()).isTrue){
                obj.siblings(".danger").addClass("disn");
                return true;
            }else{
                obj.siblings(".danger").removeClass("disn");
                return false;
            }
        }

        var idNumber = $("#idNumber");
        idNumber.blur(function(){
            idNumberCheck($(this));
        });

        $("#idCardSubmit").click(function(){
           return (sinogramCheck(realName) && idNumberCheck(idNumber));
        });

        //transactionPwd
        var transPwd = $("#transPwd");
        var idTransPwd= function(obj){
            if(common.notEmpty(obj.val())){
                obj.siblings(".danger").addClass("disn");
                return true;
            }else{
                obj.siblings(".danger").removeClass("disn");
                return false;
            }
        }
        transPwd.blur(function(){
            idTransPwd($(this));
        });

        var checkTransPwd = $("#checkTransPwd");
        var idCheckTransPwd = function(){
            if(transPwd.val() == checkTransPwd.val()){
                checkTransPwd.siblings(".danger").addClass("disn");
                return true;
            }else{
                checkTransPwd.siblings(".danger").removeClass("disn");
                return false;
            }
        }
        checkTransPwd.blur(function(){
            idCheckTransPwd();
        });

        $("#transPwdSubmit").click(function(){

        });

        //userQuestions
        var choseQuestions = $(".choseQuestions");
        choseQuestions.change(function(){
            var selfIndex = $(this).children("option:selected").index();
            choseQuestions.each(function(){
                $(this).children("option").show();
            });
            choseQuestions.each(function(){
                $(this).children("option").eq(selfIndex).hide();
            });
        })

        var checkAns = function(obj){
            if(common.notEmpty(obj.val())){
                obj.siblings(".danger").addClass("disn");
                return true;
            }else{
                obj.siblings(".danger").removeClass("disn");
                return false;
            }
        };

        var userAns = $(".userAns");
        userAns.blur(function(){
            checkAns($(this));
        });

        $("#userAnswerSubmit").click(function(){
           return  checkAns(userAns);
        });

        //tips
        var tipsFilter = $(".tipsFilter");
        $("#allIn").click(function(){
           if($(this).prop("checked") == true){
               tipsFilter.each(function(){
                  $(this).prop("checked",true);
               });
           }else{
               tipsFilter.each(function(){
                   $(this).prop("checked",false);
               });
           }
        });

    });
});