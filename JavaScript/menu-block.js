$(document).ready(function() {
    var add = document.getElementById('phone-menu');
    let count = 1;
    document.getElementById('phone-menu').style.right = '0px';

    //  $('#elem').click(function({
    //      if($('#elem').css('margin-right') == '30px'){
//};

    document.getElementById('elem').onclick = function (e) {
        if ($('#elem').css('marginRight') == '30px') {
            if (count == 1) {
                document.getElementById('phone-menu').style.right = '168px';
                count--;
            } else {
                document.getElementById('phone-menu').style.right = '0px';
                count++;
            }
            ;
        } else {
            document.getElementById('elem').onclick = function (e) {
                if (count == 1) {
                    document.getElementById('phone-menu').style.right = '196px';
                    count--;
                } else {
                    document.getElementById('phone-menu').style.right = '70px';
                    count++;
                }
                ;
            };
        }
    }
});
