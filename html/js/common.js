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
    $(".dropdown").hover(function(){
        $(this).addClass("open");
    },function(){
        $(this).removeClass("open");
    });

});
