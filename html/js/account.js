/**
 * Created by ryan on 11/11/14.
 */
define(function(require, exports, module) {
    require('jQuery');

    var placeHolder = function(obj){
        obj.siblings(".placeHolder").hide();
        obj.siblings("input").focus();
    }

    var placeDrop = function(obj){
        obj.siblings(".placeHolder").show();
    }

    var isEmail = function(obj){
        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        return reg.test(obj);
    }

    var isMobile = function(obj){
        var reg = /^1\d{10}$/;
        return reg.test(obj);
    }





    $(function(){

        //login
        if($(".inputPlace")){
            $(".inputPlace input").focus(function(){
                placeHolder($(this));
            });

            var loginAlert = $(".loginArea .alert");

            var accountValidate = function(obj){
                if(obj.val() == "" || obj.val() == null){
                    placeDrop(obj);
                    obj.addClass("error");
                    loginAlert.html("请输入正确的邮箱地址或手机号码").css("visibility","visible");
                    return false;
                }else{
                    if(isMobile(obj.val()) || isEmail(obj.val())){
                        obj.removeClass("error");
                        loginAlert.css("visibility","hidden");
                        return true;
                    }else{
                        obj.addClass("error");
                        loginAlert.html("请输入正确的邮箱地址或手机号码").css("visibility","visible");
                        return false;
                    }
                }
            }

            $("#loginName").blur(function(){
                accountValidate($(this));
            });

            var pwdValidation = function(obj){
                if(obj.val() == "" || obj.val() == null){
                    placeDrop(obj);
                    obj.addClass("error");
                    loginAlert.html("密码不能为空").css("visibility","visible");
                    return false;
                }else{
                    obj.removeClass("error");
                    loginAlert.css("visibility","hidden");
                    return true;
                }
            }

            $("#pwd").blur(function(){
                pwdValidation($(this));
            });

            $(".placeHolder").click(function(){
               $(this).hide();
               $(this).siblings('input').focus();

            });

            $("#loginBtn").click(function(){
                return (accountValidate($("#loginName")) && pwdValidation($("#pwd")));
            });

        };

        //register

        var registerAlert = $(".registerArea .alert");

        if($(".registerArea")){

            var nickName = function(obj){
                if(obj.val() == "" || obj.val() == null){
                    obj.addClass("error");
                    $(".registerArea .alert").html("密码不能为空").css("visibility","visible");
                    return false;
                }else{
                    return true;
                }
            }

            $(".nickName").blur(function(){
                nickName($(this));
            });

            var confirmPwd = function(obj){
                if($(".pwd").val() == obj.val()){
                    registerAlert.css("visibility","hidden");
                    return true;
                }else{
                    obj.addClass("error");
                    registerAlert.html("密码不一致").css("visibility","visible");
                    return false
                }
            }

            $(".confirmPwd").blur(function(){
                confirmPwd($(this));
            })

            var checkMobile = function(obj){
                if(isMobile(obj) == true){
                    registerAlert.css("visibility","hidden");
                }else{
                    registerAlert.html("请输入正确的手机号码").css("visibility","visible");
                }
            }

            $(".mobile").blur(function(){
                checkMobile($(this));
            })

            var checkEmail = function(obj){
                if(isEmail(obj) == true){
                    registerAlert.css("visibility","hidden");
                }else{
                    registerAlert.html("请输入正确的邮箱地址").css("visibility","visible");
                }
            }

            $(".email").blur(function(){
                checkEmail($(this));
            })



        }
     });

});