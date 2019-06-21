'use strict'
$(document).ready(function() {
    $('.novocti-block').click(function () {
       $('.overlay').addClass('overlay-open');
    });
    $('.overlay').click(function () {
        $('.overlay').removeClass('overlay-open');
    });
    $('.news-button').click(function () {
        $('.overlay').removeClass('overlay-open');
    });
    $('.news-block').click(function (e){
        e.stopPropagation();
    });
});
