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
        <div id='canvas-wrapper'>
            <canvas id="bgCanvas"></canvas>
            <img src="Image/background.png">
        </div>
    </div>
    <div class="swiper-container wow bounceInUp" data-wow-delay="1s" data-wow-offset="40" style="width: 100%">
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
            </div >
            <?}?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next wow fadeInLeft"></div>
        <div class="swiper-button-prev wow fadeInRight"></div>
        <? if ($ses) {
            ?>
            <a class="editing" href="/Admin/adminSite/gameBanner/gameEditing.php">Редактировать Блок</a>
        <? } ?>
    </div>

    <div class="map_container">
        <div class="map wow zoomInDown"  data-wow-offset = "100">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9532bc7a5972bbf1351ba2cb1182859737c3ee6f9108bb84ab4d6ad1841ec1dc&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <? if ($ses) {
            ?>
            <a class="editing" href="#">Редактировать Блок</a>
        <? } ?>
    </div>

        <script src="../JavaScript/codepenImgFon.js" type="text/javascript"></script>
    <script src="JavaScript/sliderJs.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

<?php
require 'Parts/Footer.php';
?>


<!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad83165488faa5d5956658404a24158ca77258dccd8f43adaa56aa4e38d4307e7&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>-->