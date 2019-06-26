'use strict'
$(document).ready(function() {
    $('.novocti-block').on('click', function(e) {
    var id_click =   $(this).attr('id');

        console.log(id_click);
switch (id_click) {
    case "newsOverlay1":
        console.log( 'первый' );
        $('#overlay1').addClass('overlay-open');
        $('#overlay1').click(function () {
        $('#overlay1').removeClass('overlay-open');
    });
    $('.news-button').click(function () {
        $('#overlay1').removeClass('overlay-open');
    });
    $('.news-block').click(function (e){
        e.stopPropagation();
    });
        break;
    case "newsOverlay2":
        console.log( 'втрой' );
        $('#overlay2').addClass('overlay-open');
    $('#overlay2').click(function () {
        $('#overlay2').removeClass('overlay-open');
    });
    $('.news-button').click(function () {
        $('#overlay2').removeClass('overlay-open');
    });
    $('.news-block').click(function (e){
        e.stopPropagation();
    });
        break;
    case "newsOverlay3":
        console.log( 'третий' );
        $('#overlay3').addClass('overlay-open');
        $('#overlay3').click(function () {
        $('#overlay3').removeClass('overlay-open');
        });
        $('.news-button').click(function () {
            $('#overlay3').removeClass('overlay-open');
        });
        $('.news-block').click(function (e){
            e.stopPropagation();
        });
        break;
    case "newsOverlay4":
        console.log( 'четвертый' );
        $('#overlay4').addClass('overlay-open');
        $('#overlay4').click(function () {
            $('#overlay4').removeClass('overlay-open');
        });
        $('.news-button').click(function () {
            $('#overlay4').removeClass('overlay-open');
        });
        $('.news-block').click(function (e){
            e.stopPropagation();
        });
        break;
    case "newsOverlay5":
        console.log( 'пятый' );
        $('#overlay5').addClass('overlay-open');
        $('#overlay5').click(function () {
            $('#overlay5').removeClass('overlay-open');
        });
        $('.news-button').click(function () {
            $('#overlay5').removeClass('overlay-open');
        });
        $('.news-block').click(function (e){
            e.stopPropagation();
        });
        break;
    default:
        console.log( 'Я таких значений не знаю' );
};
});
});