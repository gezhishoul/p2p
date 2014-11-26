/**
 * Created by ryan on 11/3/14.
 */


define(function(require, exports, module) {
    require('jQuery');
    //dropdown
    $(".dropdown").hover(function(){
        $(this).addClass("open");
    },function(){
        $(this).removeClass("open");
    });
    //tabs
    if($(".tabs").length > 0){
        $(".tabsTitle li").hover(function(){
            $(this).addClass("active");
            $(this).siblings("li").removeClass("active");
            var toOperate = $(".tabPane").eq($(this).index());
            toOperate.removeClass("disn");
            toOperate.siblings(".tabPane").addClass("disn");
        });
    };
    //input hint
    var hint = function(){
        $(".inputHint").hide();
        $(".hintInput").focus();
    };

    var moneyFormat = function(obj){
        if(obj.val() % 50 != 0){
            obj.addClass("error");
            obj.siblings(".error").css("visibility","visible");
        }else{
            obj.removeClass("error");
            obj.siblings(".error").css("visibility","hidden");
        }
    };
    if($(".inputHint").length > 0){

        var hintInput = $(".hintInput");
        hintInput.blur(function(){
            moneyFormat($(this));
        });

        $("body").click(function(e){
            var target = e.target || e.srcElement;
            if($(target).closest(".hasHint").length > 0){
                hint();
            }else if($(target).closest(".hasHint").length == 0 && (hintInput.val() == "" || hintInput.val() == null)){
                $(".inputHint").show();
            }
        });

    };

    exports.sinogram = function(obj){
        var reg = /^[\u4E00-\u9FA3]+$/;
        return reg.test(obj);
    };

    exports.notEmpty = function(obj){
        if(obj.length > 0){
            return true;
        }else{
            return false;
        }
    }
});
