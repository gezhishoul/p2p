seajs.config({
    base: "./js/",
    alias: {
        "jQuery": "jquery-1.11.1.min.js",
        "xslider":"jquery.Xslider.js",
        "easing":"jquery.easing.min.js",
        "easy":"jquery.easy-ticker.min.js"
    }
});

seajs.use('common');