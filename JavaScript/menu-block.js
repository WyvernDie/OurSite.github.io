$(document).ready(function() {
    var add = document.getElementById('phone-menu');
    let count = 1;
    document.getElementById('phone-menu').style.right = '-10px';
    document.getElementById('elem').onclick = function (e) {
        if ($('#elem').css('marginRight') == '30px') {
            if (count == 1) {
                document.getElementById('phone-menu').style.right = '166px';
                count--;
            } else {
                document.getElementById('phone-menu').style.right = '-10px';
                count++;
            };
        } else {
            document.getElementById('elem').onclick = function (e) {
                if (count == 1) {
                    document.getElementById('phone-menu').style.right = '126px';
                    count--;
                } else {
                    document.getElementById('phone-menu').style.right = '-10px';
                    count++;
                };
            };
        }
    }
});
