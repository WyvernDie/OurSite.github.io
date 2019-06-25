<?php
require 'Parts/Header.php';

$query = "SELECT * FROM newsmain "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$newsDatas = array();
$k = mysqli_num_rows($result);
$i = 0;
while ($i < $k) {
    $newsDatas[] = mysqli_fetch_array($result);
    $i++;
}


?>
<? $k = 1; ?>
<div class="overlay" id="overlay<? echo $k; ?>">
    <div class="news-block">
        <div class="news-button">
            <a id="news-button-a" src="#">Закрыть</a>
            <a id="news-button-a1" src="#">&times;</a>
        </div>
        <div class="news-elements-h1">
            <h1>название новости</h1>
        </div>
        <div class="content-news">
            <div class="wrapp-img">
                <img src="/Image/Games/aaa.jpg" alt="эта игра просто шик" class="">
            </div>
            <div class="news-element-text">
                <h2>1хорошее название подновости</h2>
                <p>1а тут хороший дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший
                    дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший дня него
                    текст</p>
                <div class="news-text-data">
                    <b>21.21.21</b>
                </div>
            </div>
        </div>
    </div>
</div>
<? $k++; ?>
<div class="overlay" id="overlay<? echo $k; ?>">
    <div class="news-block">
        <div class="news-button">
            <a id="news-button-a" src="#">Закрыть</a>
            <a id="news-button-a1" src="#">&times;</a>
        </div>
        <div class="news-elements-h1">
            <h1>название новости</h1>
        </div>
        <div class="content-news">
            <div class="wrapp-img">
                <img src="/Image/Games/aaa.jpg" alt="эта игра просто шик" class="">
            </div>
            <div class="news-element-text">
                <h2>2хорошее название подновости</h2>
                <p>1а тут хороший дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший
                    дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший дня него
                    текст</p>
                <div class="news-text-data">
                    <b>21.21.21</b>
                </div>
            </div>
        </div>
    </div>
</div>
<? $k++; ?>
<div class="overlay" id="overlay<? echo $k; ?>">
    <div class="news-block">
        <div class="news-button">
            <a id="news-button-a" src="#">Закрыть</a>
            <a id="news-button-a1" src="#">&times;</a>
        </div>
        <div class="news-elements-h1">
            <h1>название новости</h1>
        </div>
        <div class="content-news">
            <div class="wrapp-img">
                <img src="/Image/Games/aaa.jpg" alt="эта игра просто шик" class="">
            </div>
            <div class="news-element-text">
                <h2>3 хорошее название подновости</h2>
                <p>3а тут хороший дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший
                    дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший дня него
                    текст</p>
                <div class="news-text-data">
                    <b>21.21.21</b>
                </div>
            </div>
        </div>
    </div>
</div>
<? $k++; ?>
<div class="overlay" id="overlay<? echo $k; ?>">
    <div class="news-block">
        <div class="news-button">
            <a id="news-button-a" src="#">Закрыть</a>
            <a id="news-button-a1" src="#">&times;</a>
        </div>
        <div class="news-elements-h1">
            <h1>название новости</h1>
        </div>
        <div class="content-news">
            <div class="wrapp-img">
                <img src="/Image/Games/aaa.jpg" alt="эта игра просто шик" class="">
            </div>
            <div class="news-element-text">
                <h2>4 хорошее название подновости</h2>
                <p>4а тут хороший дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший
                    дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший дня него
                    текст</p>
                <div class="news-text-data">
                    <b>21.21.21</b>
                </div>
            </div>
        </div>
    </div>
</div>
<? $k++; ?>
<div class="overlay" id="overlay<? echo $k; ?>">
    <div class="news-block">
        <div class="news-button">
            <a id="news-button-a" src="#">Закрыть</a>
            <a id="news-button-a1" src="#">&times;</a>
        </div>
        <div class="news-elements-h1">
            <h1>название новости</h1>
        </div>
        <div class="content-news">
            <div class="wrapp-img">
                <img src="/Image/Games/aaa.jpg" alt="эта игра просто шик" class="">
            </div>
            <div class="news-element-text">
                <h2>5 хорошее название подновости</h2>
                <p>5а тут хороший дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший
                    дня него текста тут хороший дня него текста тут хороший дня него текста тут хороший дня него
                    текст</p>
                <div class="news-text-data">
                    <b>21.21.21</b>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="novosti-on">
    <p class="novosti-icon wow fadeInLeft" data-wow-duration="2s">
        <span class="x">
            новости
        </span>
    </p>
    <div class="novosti-big-block">
        <div class="owl-carousel owl-theme">
            <div class="novocti-block n1 wow bounceInDown" data-wow-delay="1s" id="newsOverlay1">
                <div class="img-novosti">
                    <p><img src="//OurSite/Image/Games/aaa.jpg" id="image-news"></p>
                </div>
                <hr>
                <div class="text-big">
                    <div class="novosti-text">
                        <p>хорошая завлекающая игра</p>
                    </div>
                    <div class="text-hover">
                        <p>а это при наведении</p>
                    </div>
                </div>
                <hr>
                <div class="data">
                    <!--                    <b id="dateActive1">активна</b>-->
                    <b id="dateActive2">не активна</b>
                    <p>21.04.19</p>
                </div>
            </div>


            <div class="novocti-block n2 wow bounceInDown" data-wow-delay="2s" id="newsOverlay2">
                <div class="img-novosti">
                    <p><img src="//OurSite/Image/Games/aaa.jpg" id="image-news"></p>
                </div>
                <hr>
                <div class="text-big">
                    <div class="novosti-text">
                        <p>хорошая завлекающая игра</p>
                    </div>
                    <div class="text-hover">
                        <p>а это при наведении</p>
                    </div>
                </div>
                <hr>
                <div class="data">
                    <p>21.04.19</p>
                </div>
            </div>


            <div class="novocti-block n3 wow bounceInDown" data-wow-delay="3s" id="newsOverlay3">
                <div class="img-novosti">
                    <p><img src="//OurSite/Image/Games/aaa.jpg" id="image-news"></p>
                </div>
                <hr>
                <div class="text-big">
                    <div class="novosti-text">
                        <p>хорошая завлекающая игра</p>
                    </div>
                    <div class="text-hover">
                        <p>а это при наведении</p>
                    </div>
                </div>
                <hr>
                <div class="data">
                    <p>21.04.19</p>
                </div>
            </div>

            <div class="novocti-block n4 wow bounceInDown" data-wow-delay="4s" id="newsOverlay4">
                <div class="img-novosti">
                    <p><img src="//OurSite/Image/Games/aaa.jpg" id="image-news"></p>
                </div>
                <hr>
                <div class="text-big">
                    <div class="novosti-text">
                        <p>хорошая завлекающая игра</p>
                    </div>
                    <div class="text-hover">
                        <p>а это при наведении</p>
                    </div>
                </div>
                <hr>
                <div class="data">
                    <p>21.04.19</p>
                </div>
            </div>

            <div class="novocti-block n5 wow bounceInDown" data-wow-delay="5s" id="newsOverlay5">
                <div class="img-novosti">
                    <p><img src="//OurSite/Image/Games/aaa.jpg" id="image-news"></p>
                </div>
                <hr>
                <div class="text-big">
                    <div class="novosti-text">
                        <p>хорошая завлекающая игра</p>
                    </div>
                    <div class="text-hover">
                        <p>а это при наведении</p>
                    </div>
                </div>
                <hr>
                <div class="data">
                    <p>21.04.19</p>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="/JavaScript/jQuery.js"></script>
<script src="/JavaScript/news-js.js"></script>
<script src="/owncarousel2/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
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

