'use strict'
$(document).ready(function() {
    $('.ironEl').on("mouseover", function(e) {
        var id_mous =   $(this).attr('id');

            console.log(id_mous);
            switch (id_mous) {
                case "ironElements1":
                    console.log('первый');
                    $('#ironImgClose').addClass('ironImgCloseClass');
                    $('.ironEl').on("mouseout", function(e) {
                        $('#ironImgClose').removeClass('ironImgCloseClass');
                    });
                    break;
                case "ironElements2":
                    console.log('втрой');

                    break;
                case "ironElements3":
                    console.log('третий');

                    break;
                case "ironElements4":
                    console.log('четвертый');

                    break;
                case "ironElements5":
                    console.log('пятый');

                    break;
                default:
                    console.log('Я таких значений не знаю');
            };
        });
    });