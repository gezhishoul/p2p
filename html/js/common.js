/**
 * Created by ryan on 11/3/14.
 */

seajs.config({
    base: "./js/",
    alias: {
        "$": "jquery-1.11.1.min.js",
        "xslider":"jquery.Xslider.js"
    }
});
seajs.use('$',function(){
    //dropdown
    $(".dropdown").hover(function(){
        $(this).addClass("open");
    },function(){
        $(this).removeClass("open");
    });
    //tabs
    if($(".tabs").length > 0){
        $(".tabsTitle li").click(function(){
            $(this).addClass("active");
            $(this).siblings("li").removeClass("active");
            var toOperate = $(".tabPane").eq($(this).index());
            toOperate.removeClass("disn");
            toOperate.siblings(".tabPane").addClass("disn");
        });
    };
    //input hint
    if(".inputHint"){
        $(".inputHint").click(function(){
            $(this).hide();
            $(".hintInput").focus();
        });
        $(".hintInput").click(function(){
            $(".inputHint").trigger("click");
        });
        $("body").click(function(){
            if($(this).closest(".hasHint").length == 0){
                console.log(111)
                $(".inputHint").show();
            }else{
                console.log(222)
                $(".inputHint").hide();
            }
        })
    }
});
