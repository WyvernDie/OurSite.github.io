$(document).ready(function() {
    var add = document.getElementById('phone-menu');
    let count = 1;
    var width=screen.width;


    document.getElementById('phone-menu').style.right = '0px';

    //  $('#elem').click(function({
    //      if($('#elem').css('margin-right') == '30px'){
//};

    document.getElementById('elem').onclick = function (e) {
        if ($('#elem').css('marginRight') == '30px') {
            if (count == 1) {
                document.getElementById('phone-menu').style.right = '168px';
                // differe = width-127;
                //127 - ширина блока меню
                // document.getElementById('phone-menu').style.left =`differe`;
                // document.getElementById('phone-menu').style.display = 'flex';
                // document.getElementById('phone-menu').style.margineLeft =0;
                count--;

            } else {
                document.getElementById('phone-menu').style.right = '0px';
                count++;
            };
        } else {
            document.getElementById('elem').onclick = function (e) {
                if (count == 1) {
                    document.getElementById('phone-menu').style.right = '127px';
                    count--;
                } else {
                    document.getElementById('phone-menu').style.right = '0px';
                    count++;
                };
            };
        }
    }
});
