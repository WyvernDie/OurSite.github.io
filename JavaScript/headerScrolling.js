$(document).ready(function(){

// Cache Header
    var $header = $('.global-header');

// Get height of global-header to use later as starting point
    var $hHeight = $header.height();

// Set initial position to current position on page
    var prevTop = $(window).scrollTop();

// Scroll event
    $(window).on('scroll', function(e) {
        st = $(this).scrollTop(); // Set scroll location
        if (st > prevTop && st > $hHeight) {
            $header.addClass('js-global-header-scrolling');
            if(  document.getElementById('phone-menu').style.right == '-10px') {
                document.getElementById('phone-menu').style.display = 'flex';
            }
            else {
                document.getElementById('phone-menu').style.display = 'none';
            }
        } else {
            $header.removeClass('js-global-header-scrolling');
            document.getElementById('phone-menu').style.display = 'flex';
            document.getElementById('phone-menu').style.right = '-10px';
        }
        prevTop = st;
    });

});