
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$('.dropdown').hover(function() {
    $(this).find('#dropdown-custom').stop(true, true).delay(200).fadeIn(300);
}, function() {
    $(this).find('#dropdown-custom').stop(true, true).delay(200).fadeOut(300);
});

$(document).ready(function(){
    $("#toggle-button, #mobile-toggle-button").click(function(){
        $("#toggle-menu").slideToggle();
    });
});

