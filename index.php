<?php
require 'Parts/Header.php';
$query = "SELECT * FROM dbgame "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$gameDatas = array();
$m = mysqli_num_rows($result);
while ($d < $m) {
    $gameDatas[] = mysqli_fetch_array($result);
    $d++;
}
?>




    <div class="price">
        <img src="Image/background.jpg" width="100%" height="auto">
    </div>
<div><h1 class="game-slider">Игры</h1><div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($gameDatas as $gameData){?>
                <div class="swiper-slide" >
                <div class="sliderContainer" >
                    <img class="imageGame" src = "Image/Games/<? echo $gameData['linkName'];?>" >
                    <div class="infoGame">
                        <h2> <? echo $gameData['gameName'];?> </h2>
                        <p> <? echo $gameData['description'];?> </p>
                    </div>

                </div >
                <?}?>
            </div>
            <? if ($ses) {
                ?>
                <a class="editing" href="/Admin/adminSite/gameBanner/gameEditing.php">Редактировать Блок</a>
            <? } ?>
        </div>
    </div>

    <div class="map_container">
        <div class="button">
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="Image/Games/GTA%205.jpg" width="100%"></div>
                <div class="swiper-slide"><img src="Image/Games/GTA%205.jpg" width="100%"></div>

            </div>
        </div>
    </div>


    <script src="JavaScript/sliderJs.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        var swiper1 = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },
        });
    </script>
<?php
require 'Parts/Footer.php';
?>


<!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad83165488faa5d5956658404a24158ca77258dccd8f43adaa56aa4e38d4307e7&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>-->