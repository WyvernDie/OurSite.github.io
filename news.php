<?php
require 'Parts/Header.php';

$query = "SELECT * FROM newsmain ORDER BY actionStartDate DESC"; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$newsDatas = array();
$k = mysqli_num_rows($result);
$i = 0;
while ($i < 5) {
    $newsDatas[] = mysqli_fetch_array($result);
    $i++;
}

$k = 1;
?>

<? foreach($newsDatas as $newsData ){ ?>
<div class="overlay" id="overlay<? echo "$k"; ?>">
    <div class="news-block">
        <div class="news-button">
            <a id="news-button-a" src="#">Закрыть</a>
            <a id="news-button-a1" src="#">&times;</a>
        </div>
        <div class="news-elements-h1">
            <h1><? echo $newsData['newsTitle']; ?></h1>
        </div>
        <div class="content-news">
            <div class="wrapp-img">
                <img src="Image/news/<? echo $newsData['newsImageLink']; ?>" alt="эта игра просто шик" class="">
            </div>
            <div class="news-element-text">

                <h2><? echo $newsData['newsSubtitle']; ?></h2>
                <p><? echo $newsData['newsDescription']; ?></p>
                <div class="news-text-data">
                    <b><? echo $newsData['actionStartDate']; ?> - <? echo $newsData['actionFinishDate']; ?></b>
                </div>
            </div>
        </div>
    </div>
</div>

<?
    $k++;}
?>


<div class="novosti-on">
    <p class="novosti-icon wow fadeInLeft" data-wow-duration="2s">
      <span class="x">
          новости
      </span>
        <? if($ses){?>
            <a class="editing" href="Admin/adminSite/news/newsEditingMain.php">Редактировать данные на странице</a>
        <?}?>
    </p>

    <div class="novosti-big-block">
        <div class="owl-carousel owl-theme" id="news">
            <? $k = 1; ?>
            <?  foreach($newsDatas as $newsData){?>
            <div class="novocti-block n1 wow bounceInDown" data-wow-delay="<? echo "$k"; ?>s" id="newsOverlay<? echo "$k"; ?>">

                <div class="img-novosti">
                    <p><img src="Image/news/<? echo $newsData['newsImageLink']; ?>" id="image-news"></p>
                </div>
                <hr>

                <div class="text-big">
                    <div class="novosti-text">
                        <p><? echo $newsData['newsTitle']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="data">
                    <p><? echo $newsData['actionStartDate']; ?></p>
                </div>
            </div>

            <?
                $k++;}
            ?>

        </div>
    </div>
</div>


<script src="/JavaScript/news-js.js"></script>
<script src="/owncarousel2/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $("#news").owlCarousel({
            items: 5,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    margin: 10,
                },
                240: {
                    items: 1,
                    margin: 10,
                    dots: true
                },
                320: {
                    items: 1,
                    margin: 10,
                    dots: true
                },
                480: {
                    dots: true,
                    margin: 10,
                    items: 2,
                    nav: false
                },
                640: {
                    dots: true,
                    items: 3,
                    nav: false
                },
                876: {
                    dots: true,
                    items: 4,
                    nav: false
                },
                1300: {
                    items: 5,
                    dots: true,
                    nav: false
                }
            }
        });
    });
</script>
<?php
require 'Parts/Footer.php';
?>

