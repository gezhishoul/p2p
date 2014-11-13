/**
 * Created by ryan on 11/13/14.
 */
define(function(require, exports, module){

    require("jQuery");
    $(".helpCenter dt").click(function(){
        $(this).children(".caret").toggleClass("upArrow");
       $(this).siblings("dd").toggleClass("disn");
    });

});