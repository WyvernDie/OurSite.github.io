'use strict'
$(document).ready(function() {
    // $('.ironEl').on("mouseover", function(e) {
    //     var id_mous =   $(this).attr('id');
    //
    //         console.log(id_mous);
    //         switch (id_mous) {
    //             case "ironElements1":
    //                 console.log('первый');
    //                 $('#ironImgClose').addClass('ironImgCloseClass');
    //                 $('#ironImgOpen').addClass('ironImgOpenClass');
    //                 document.getElementById('ironImg1').style.zIndex=0;
    //                 $('.ironEl').on("mouseout", function(e) {
    //                     $('#ironImgClose').removeClass('ironImgCloseClass');
    //                     $('#ironImgOpen').removeClass('ironImgOpenClass');
    //                     document.getElementById('ironImg1').style.zIndex=-1;
    //                 });
    //
    //                 break;
    //             case "ironElements2":
    //                 console.log('втрой');
    //                 $('#ironImgClose').addClass('ironImgCloseClass');
    //                 $('#ironImgOpen').addClass('ironImgOpenClass');
    //                 document.getElementById('ironImg2').style.zIndex=0;
    //                 $('.ironEl').on("mouseout", function(e) {
    //                     document.getElementById('ironImg2').style.zIndex=-1;
    //                     $('#ironImgClose').removeClass('ironImgCloseClass');
    //                     $('#ironImgOpen').removeClass('ironImgOpenClass');
    //                 });
    //                 break;
    //             case "ironElements3":
    //                 console.log('третий');
    //                 $('#ironImgClose').addClass('ironImgCloseClass');
    //                 $('#ironImgOpen').addClass('ironImgOpenClass');
    //                 document.getElementById('ironImg3').style.zIndex=0;
    //                 $('.ironEl').on("mouseout", function(e) {
    //                     document.getElementById('ironImg3').style.zIndex=-1;
    //                     $('#ironImgClose').removeClass('ironImgCloseClass');
    //                     $('#ironImgOpen').removeClass('ironImgOpenClass');
    //                 });
    //                 break;
    //             case "ironElements4":
    //                 console.log('четвертый');
    //                 $('#ironImgClose').addClass('ironImgCloseClass');
    //                 $('#ironImgOpen').addClass('ironImgOpenClass');
    //                 document.getElementById('ironImg1').style.zIndex=0;
    //                 $('.ironEl').on("mouseout", function(e) {
    //                     document.getElementById('ironImg1').style.zIndex=-1;
    //                     $('#ironImgClose').removeClass('ironImgCloseClass');
    //                     $('#ironImgOpen').removeClass('ironImgOpenClass');
    //                 });
    //                 break;
    //             case "ironElements5":
    //                 console.log('пятый');
    //                 document.getElementById('ironImg1').style.zIndex=0;
    //                 $('#ironImgClose').addClass('ironImgCloseClass');
    //                 $('#ironImgOpen').addClass('ironImgOpenClass');
    //                 $('.ironEl').on("mouseout", function(e) {
    //                     document.getElementById('ironImg1').style.zIndex=-1;
    //                     $('#ironImgClose').removeClass('ironImgCloseClass');
    //                     $('#ironImgOpen').removeClass('ironImgOpenClass');
    //                 });
    //                 break;
    //             default:
    //                 console.log('Я таких значений не знаю');
    //         };
    //     });

       const slide = $('.owl-carousel');

       slide.on('intialize.owl.carousel initializwd.owl.carousel', function (event) {
          $('#slide-controlText').text(event.item.index + 1)
       });

       $('#slideLeft').click(function () {
           slide.trigger('prev.owl.carousel');
           $('.transform').addClass('eyeOpen');
           $('.transform').addClass('eyeClose');
       })

    $('#slideRight').click(function () {
        slide.trigger('next.owl.carousel');
        $('.transform').addClass('eyeOpen');
        $('.transform').addClass('eyeClose');
    })
    });