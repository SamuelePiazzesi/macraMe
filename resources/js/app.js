
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/*  DROPDOWN HOVER HOMEPAGE   */

$('.dropdown').hover(function() {
    $(this).find('#dropdown-custom').stop(true, true).delay(200).fadeIn(300);
}, function() {
    $(this).find('#dropdown-custom').stop(true, true).delay(200).fadeOut(300);
});

/* CUSTOM TOGGLE MENU HOMEPAGE */

$(document).ready(function(){
    $("#toggle-button, #mobile-toggle-button").click(function(){
        $("#toggle-menu").slideToggle();
    });
});

/* TEXT ROTATOR HOMEPAGE */

(function($){
    $.fn.extend({
        rotaterator: function(options) {

            var defaults = {
                fadeSpeed: 500,
                pauseSpeed: 100,
                child:null
            };

            var options = $.extend(defaults, options);

            return this.each(function() {
                var o =options;
                var obj = $(this);
                var items = $(obj.children(), obj);
                items.each(function() {$(this).hide();})
                if(!o.child){var next = $(obj).children(':first');
                }else{var next = o.child;
                }
                $(next).fadeIn(o.fadeSpeed, function() {
                    $(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
                        var next = $(this).next();
                        if (next.length == 0){
                            next = $(obj).children(':first');
                        }
                        $(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
                    })
                });
            });
        }
    });
})(jQuery);

$(document).ready(function() {
    $('#rotate').rotaterator({fadeSpeed:1000, pauseSpeed:600});
});
