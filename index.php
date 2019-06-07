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
    <div class="slide-container">
        <div class="slide">
            <div class="slide-content">Переход</div>
            <img src="../Image/block_r.png" height="48px" class="s">
            <img src="../Image/block_l.png" height="48px" class="p">
            <div id="hidden_panel">
                <div id="hidden_panel2"><a href="#map">как добраться</a></div>
                <div id="hidden_panel2"><a> якорь </a></div>
                <div id="hidden_panel2"><a> якорь </a></div>
                <div id="hidden_panel2"><a> якорь </a></div>
                <div id="hidden_panel2"><a> якорь </a></div>
                <? if ($ses) {
                    ?>
                    <a class="editing" href="../Admin/adminSite/linkEditing.php">Редактировать Блок</a>
                <? } ?>
            </div>
        </div>
    </div>

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
            </div >
            <?}?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <? if ($ses) {
            ?>
            <a class="editing" href="/Admin/adminSite/gameBanner/gameEditing.php">Редактировать Блок</a>
        <? } ?>
    </div>

    <div class="map_container">
        <a name="map"><h1>Как добраться</h1></a>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad83165488faa5d5956658404a24158ca77258dccd8f43adaa56aa4e38d4307e7&amp;width50%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <? if ($ses) {
            ?>
            <a class="editing" href="#">Редактировать Блок</a>
        <? } ?>
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
    </script>
<?php
require 'Parts/Footer.php';
?>


<!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad83165488faa5d5956658404a24158ca77258dccd8f43adaa56aa4e38d4307e7&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>-->