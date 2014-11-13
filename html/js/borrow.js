/**
 * Created by ryan on 11/12/14.
 */
define(function(require, exports, module){

    require("jQuery");

    if($(".borrowForm").length > 0) {

        var borrowTitle = $("#borrowTitle");
        var checkBorrowTitle = function(obj){
            if(obj.val() == "" || obj.val() == null){
                obj.addClass("error");
                obj.siblings(".danger").removeClass("disn");
                return false;
            }else{
                obj.removeClass("error");
                obj.siblings(".danger").addClass("disn");
                return true;
            }
        }

        borrowTitle.blur(function(){
            checkBorrowTitle($(this));
        });

        var rate = $("#rate");
        var regNumber = /^(1[0-9]|2[0-4]){1}$/;
        var checkRate = function(){
            if(regNumber.test(rate.val()) == false){
                rate.addClass("error");
                rate.siblings(".danger").removeClass("disn");
                return false;
            }else{
                rate.removeClass("error");
                rate.siblings(".danger").addClass("disn");
                return true;
            }
        }
        rate.blur(function(){
            checkRate();
        });

        var borrowContent = $("#borrowContent");
        borrowContent.blur(function(){
            checkBorrowTitle($(this));
        });

        $("#borrowSubmit").click(function(){
            return (checkBorrowTitle(borrowTitle) && checkRate() && checkBorrowTitle(borrowContent));
        })
    }
});