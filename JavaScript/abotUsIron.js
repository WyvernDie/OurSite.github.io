'use strict'
$(document).ready(function() {

       const slide = $('.owl-carousel');
    var count, n1=2, n2=3, n3=4, n4=5, n5=1;

       slide.on('intialize.owl.carousel initializwd.owl.carousel', function (event) {
          $('#slide-controlText').text(event.item.index + 1)
       });
       if(window.innerWidth >= 876){
           count=2;
           console.log(window.innerWidth);
       }else{
           count=1;
       }
    if(count==2){
    } else if (count==1) {
        document.getElementById('slide-controlText').style.display='none';
        document.getElementById('ironInfoD').style.display='none';
        document.getElementById('slide-controlTextHelp').style.display='block';
        document.getElementById('ironInfoDHelp').style.display='block';
    }

       $('#slideLeft').click(function () {
           switch (count) {
               case n1:
                   $('.transform11').addClass('transformOpen');
                   $('.transform1').addClass('transformClose');
                   console.log(count);
                   break;
               case n2:
                   $('.transform22').addClass('transformOpen');
                   $('.transform2').addClass('transformClose');
                   console.log(count);
                   break;
               case n3:
                   $('.transform33').addClass('transformOpen');
                   $('.transform3').addClass('transformClose');
                   console.log(count);
                   break;
               case n4:
                   $('.transform44').addClass('transformOpen');
                   $('.transform4').addClass('transformClose');
                   console.log(count);
                   break;
               case n5:
                   $('.transform55').addClass('transformOpen');
                   $('.transform5').addClass('transformClose');
                   console.log(count);
                   break;
           }
           if (count==n1){
               $('.transform22').removeClass('transformOpen');
               $('.transform2').removeClass('transformClose');
               $('.transform33').removeClass('transformOpen');
               $('.transform3').removeClass('transformClose');
               $('.transform44').removeClass('transformOpen');
               $('.transform4').removeClass('transformClose');
               $('.transform55').removeClass('transformOpen');
               $('.transform5').removeClass('transformClose');
           } else if (count==n2){
               $('.transform11').removeClass('transformOpen');
               $('.transform1').removeClass('transformClose');
               $('.transform33').removeClass('transformOpen');
               $('.transform3').removeClass('transformClose');
               $('.transform44').removeClass('transformOpen');
               $('.transform4').removeClass('transformClose');
               $('.transform55').removeClass('transformOpen');
               $('.transform5').removeClass('transformClose');
           } else if (count==n3){
               $('.transform11').removeClass('transformOpen');
               $('.transform1').removeClass('transformClose');
               $('.transform22').removeClass('transformOpen');
               $('.transform2').removeClass('transformClose');
               $('.transform44').removeClass('transformOpen');
               $('.transform4').removeClass('transformClose');
               $('.transform55').removeClass('transformOpen');
               $('.transform5').removeClass('transformClose');
           } else if (count==n4){
               $('.transform11').removeClass('transformOpen');
               $('.transform1').removeClass('transformClose');
               $('.transform33').removeClass('transformOpen');
               $('.transform3').removeClass('transformClose');
               $('.transform22').removeClass('transformOpen');
               $('.transform2').removeClass('transformClose');
               $('.transform55').removeClass('transformOpen');
               $('.transform5').removeClass('transformClose');
           } else if (count==n5){
               $('.transform11').removeClass('transformOpen');
               $('.transform1').removeClass('transformClose');
               $('.transform33').removeClass('transformOpen');
               $('.transform3').removeClass('transformClose');
               $('.transform44').removeClass('transformOpen');
               $('.transform4').removeClass('transformClose');
               $('.transform22').removeClass('transformOpen');
               $('.transform2').removeClass('transformClose');
           }
           slide.trigger('prev.owl.carousel');
                   count--;
           if (count<1) {
               count = 5;
           }
       });

    $('#slideRight').click(function () {
        var n1=5, n2=1, n3=2, n4=3, n5=4;
        switch (count) {
            case n1:
                $('.transform11').addClass('transformOpen');
                $('.transform1').addClass('transformClose');
                console.log(count);
                break;
            case n2:
                $('.transform22').addClass('transformOpen');
                $('.transform2').addClass('transformClose');
                console.log(count);
                break;
            case n3:
                $('.transform33').addClass('transformOpen');
                $('.transform3').addClass('transformClose');
                console.log(count);
                break;
            case n4:
                $('.transform44').addClass('transformOpen');
                $('.transform4').addClass('transformClose');
                console.log(count);
                break;
            case n5:
                $('.transform55').addClass('transformOpen');
                $('.transform5').addClass('transformClose');
                console.log(count);
                break;
        }
        if (count==n1){
            $('.transform22').removeClass('transformOpen');
            $('.transform2').removeClass('transformClose');
            $('.transform33').removeClass('transformOpen');
            $('.transform3').removeClass('transformClose');
            $('.transform44').removeClass('transformOpen');
            $('.transform4').removeClass('transformClose');
            $('.transform55').removeClass('transformOpen');
            $('.transform5').removeClass('transformClose');
        } else if (count==n2){
            $('.transform11').removeClass('transformOpen');
            $('.transform1').removeClass('transformClose');
            $('.transform33').removeClass('transformOpen');
            $('.transform3').removeClass('transformClose');
            $('.transform44').removeClass('transformOpen');
            $('.transform4').removeClass('transformClose');
            $('.transform55').removeClass('transformOpen');
            $('.transform5').removeClass('transformClose');
        } else if (count==n3){
            $('.transform11').removeClass('transformOpen');
            $('.transform1').removeClass('transformClose');
            $('.transform22').removeClass('transformOpen');
            $('.transform2').removeClass('transformClose');
            $('.transform44').removeClass('transformOpen');
            $('.transform4').removeClass('transformClose');
            $('.transform55').removeClass('transformOpen');
            $('.transform5').removeClass('transformClose');
        } else if (count==n4){
            $('.transform11').removeClass('transformOpen');
            $('.transform1').removeClass('transformClose');
            $('.transform33').removeClass('transformOpen');
            $('.transform3').removeClass('transformClose');
            $('.transform22').removeClass('transformOpen');
            $('.transform2').removeClass('transformClose');
            $('.transform55').removeClass('transformOpen');
            $('.transform5').removeClass('transformClose');
        } else if (count==n5){
            $('.transform11').removeClass('transformOpen');
            $('.transform1').removeClass('transformClose');
            $('.transform33').removeClass('transformOpen');
            $('.transform3').removeClass('transformClose');
            $('.transform44').removeClass('transformOpen');
            $('.transform4').removeClass('transformClose');
            $('.transform22').removeClass('transformOpen');
            $('.transform2').removeClass('transformClose');
        }else
        {console.log('опс')}

        slide.trigger('next.owl.carousel');

        count++;
            if (count>5){
                count=1;
            }
    });
    });