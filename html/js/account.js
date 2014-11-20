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


    var isNumber = function(obj){
        var reg = /^\d+$/;
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
        require("modal");
        var registerBtn = $("#registerBtn");
        var registerAlert = $(".registerArea .alert");

        if($(".registerArea")){

            var CheckNickName = function(obj){
                if(obj.val() == "" || obj.val() == null){
                    obj.addClass("error");
                    $(".registerArea .alert").html("昵称不能为空").css("visibility","visible");
                    return false;
                }else{
                    obj.removeClass("error");
                    return true;
                }
            }

            var nickName = $(".nickName");
            nickName.blur(function(){
                CheckNickName($(this));
            });

            var checkConfirmPwd = function(obj){
                if($(".pwd").val() == obj.val()){
                    obj.removeClass("error");
                    registerAlert.css("visibility","hidden");
                    return true;
                }else{
                    obj.addClass("error");
                    registerAlert.html("密码不一致").css("visibility","visible");
                    return false
                }
            }
            var confirmPwd = $(".confirmPwd");
            confirmPwd.blur(function(){
                checkConfirmPwd($(this));
            })

            var checkMobile = function(obj){
                if(isMobile(obj.val()) == true){
                    obj.removeClass("error");
                    registerAlert.css("visibility","hidden");
                    return true;
                }else{
                    obj.addClass("error");
                    registerAlert.html("请输入正确的手机号码").css("visibility","visible");
                    return false;
                }
            }
            var userMobile = $(".mobile");
            userMobile.blur(function(){
                checkMobile($(this));
            })

            var checkEmail = function(obj){
                if(isEmail(obj.val()) == true){
                    obj.removeClass("error");
                    registerAlert.css("visibility","hidden");
                    return true;
                }else{
                    obj.addClass("error");
                    registerAlert.html("请输入正确的邮箱地址").css("visibility","visible");
                    return false;
                }
            }

            var userEmail = $(".email");
            userEmail.blur(function(){
                checkEmail($(this));
            })



            var countDownNumber = $("#countDown");
            var idTime = countDownNumber.html();

            var stopCount;
            var countDown = function(){
                countDownNumber.html(idTime-1);
                if(idTime > 0){
                    return idTime--;
                }else{
                    clearInterval(stopCount);
                    countDownNumber.parent(".mobileSend").removeAttr("disabled");
                    countDownNumber.html(60);
                }
            }

            registerBtn.click(function(){
               if(CheckNickName(nickName) && pwdValidation($("#pwd")) && checkConfirmPwd(confirmPwd) && checkMobile(userMobile) && checkEmail(userEmail)){
                   $('#registerModal').modal({
                       backdrop: 'static'
                   });
                stopCount = setInterval(countDown,1000);

               }
                 return false;
            });

            $(".mobileSend").click(function(){
                idTime = 60;
                $(this).attr("disabled","disabled");
                stopCount = setInterval(countDown,1000);
            })

            var idCode = $("#idCode");
            $("#idCodeSubmit").click(function(){
                if(idCode.val() != "" && idCode.val() != null){
                    $("#registerForm").submit();
                }else{
                    idCode.addClass("error");
                }
            })

        }
     });

    //myAccount
    if($(".myAccount").length > 0){
        $(".collapse dt").click(function(){
            $(this).siblings("dd").toggleClass("disn");
        });
    }

    if($(".charge")){
        require('modal');
        var checkChargeMoney = function(obj){
            if(obj.val() % 1 != 0 || obj.val() < 50){
                obj.siblings(".danger").removeClass("disn");
                return false;
            }else{
                obj.siblings(".danger").addClass("disn");
                return true;
            }
        };

       var chargeMoney = $("#chargeMoney");

        chargeMoney.blur(function(){
            checkChargeMoney($(this));
        });

        $("#chargeBtn").click(function(){
            if(checkChargeMoney(chargeMoney) == true){
                $('#chargeModal').modal({
                    backdrop: 'static'
                });
            }else{
                return false;
            }
        });
    }
//bankCard modal
    if($("#cashModal")){
        require("modal");
        var validateCode = $("#validCode");
        var countDownValidate = 59;
        var mobileValidate;
        var validateBankCard = function(){
            if(countDownValidate > 0){
                validateCode.attr("disabled",true).html("<em>"+countDownValidate+"</em>秒后重发");
                countDownValidate--;
            }else{
                validateCode.removeAttr("disabled").html("获取验证码");
                countDownValidate = 59;
                clearInterval(mobileValidate);
            }
        };

        validateCode.click(function(){
            if(countDownValidate == 59){
                mobileValidate = setInterval(validateBankCard,1000);
            }
        });

        $("#addNewCard").click(function(){
            $('#cashModal').modal();
        });

    };


    if($(".cashArea").length > 0){

    }



});