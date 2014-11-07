define(function(require, exports, module) {
    require('jQuery');
    require('xslider');
    require('easing');
    require('easy');
    $(function(){
        $("#banner").Xslider({
            space: 4000,
            conbox: '.slides',
            affect:'fade',
            ctag: 'li',
            current:'active'
        });
        $('.scrollInvest').easyTicker({
            direction: 'up',
            easing: 'swing',
            speed: 'slow',
            interval: 3000,
            height: '202px',
            visible: 0,
            mousePause: 1
        });
    });
});