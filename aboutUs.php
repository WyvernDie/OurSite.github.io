<?php
require 'Parts/Header.php';
?>
<div class="wrappOnas">
    <h1>Loewm ipsum</h1>
    <div class="infoBlocks">
        <div class="infoBlock" id="infoBlock1">
                    <div class="infoBlockText">
                        <div class="infoBlockHelp">
                        <hr>
                        <h2>Lorem ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt dslkfsdf fk;sdkf;lskf;ldk sdkjnma,;cs;ldc jsdklfmsdlkfmksfsd zxcvnm qwrtsyui wqwtshjk</p>
                        </div>
                        <hr id="hrBottom">
                    </div>
                <div class="infoBlockImg">
                    <hr>
                    <img src="../Image/news/1.jpg" alt="тутуттут" id="" class="">
                    <hr>
                </div>
        </div>



        <div class="infoBlock" id="infoBlock2">
            <div class="infoBlockText">
                <div class="infoBlockHelp">
                    <hr>
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt dslkfsdf fk;sdkf;lskf;ldk sdkjnma,;cs;ldc jsdklfmsdlkfmksfsd zxcvnm qwrtsyui wqwtshjk</p>
                </div>
                <hr id="hrBottom">
            </div>
            <div class="infoBlockImg">
                <hr>
                <img src="../Image/news/1.jpg" alt="тутуттут" id="" class="">
                <hr>
            </div>
        </div>




        <div class="infoBlock" id="infoBlock3">
            <div class="infoBlockText">
                <div class="infoBlockHelp">
                    <hr>
                    <h2>Lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt dslkfsdf fk;sdkf;lskf;ldk sdkjnma,;cs;ldc jsdklfmsdlkfmksfsd zxcvnm qwrtsyui wqwtshjk</p>
                </div>
                <hr id="hrBottom">
            </div>
            <div class="infoBlockImg">
                <hr>
                <img src="../Image/news/1.jpg" alt="тутуттут" id="" class="">
                <hr>
            </div>
        </div>
    </div>

<div class="wrappIron">
    <h2>ЖЕЛЕЗО</h2>
    <div class="ironElements">
            <div class="ironImg owl-carousel owl-theme" id="ironCarousel">
                    <div class="ironImgHelp" id="ironImgHelp1">
                <img src="../Image/Games/GTA5.jpg" id="ironImg1" alt="">
                <img src="../Image/iSeeYou1.jpg"   class="transform"  id="ironOpen" alt="">
                <img src="../Image/iSeeYou2.jpg"   class="transform"  id="ironClose" alt="">
                    </div>
                        <div class="ironImgHelp" id="ironImgHelp2">
                <img src="../Image/Games/c.jpg" id="ironImg2" alt="">
                <img src="../Image/iSeeYou1.jpg"  class="transform"  id="ironOpen" alt="">
                <img src="../Image/iSeeYou2.jpg"  class="transform"  id="ironClose" alt="">
                        </div>
                <div class="ironImgHelp" id="ironImgHelp3">
                <img src="../Image/Games/GTA5.jpg" id="ironImg3" alt="">
                <img src="../Image/iSeeYou1.jpg"  class="transform" id="ironOpen" alt="">
                <img src="../Image/iSeeYou2.jpg"  class="transform" id="ironClose" alt="">
                    </div>
                        <div class="ironImgHelp" id="ironImgHelp4">
                <img src="../Image/Games/c.jpg" id="ironImg4" alt="">
                <img src="../Image/iSeeYou1.jpg"  class="transform"  id="ironOpen" alt="">
                <img src="../Image/iSeeYou2.jpg"  class="transform"  id="ironClose" alt="">
                        </div>
                            <div class="ironImgHelp" id="ironImgHelp5">
                <img src="../Image/Games/GTA5.jpg" id="ironImg5" alt="">
                <img src="../Image/iSeeYou1.jpg"  class="transform" id="ironOpen" alt="">
                <img src="../Image/iSeeYou2.jpg"  class="transform" id="ironClose" alt="">
                            </div>
            </div>

        <div class="ironInfo owl-carousel owl-theme" id="ironInfoD">
            <p id="ironInfo1">1ldssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            <p id="ironInfo2">21ldssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            <p id="ironInfo3">31ldssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            <p id="ironInfo4">41ldssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            <p id="ironInfo5">51ldssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
        </div>

                   <hr id="imgTextHr">
            <div class="imgNav">

                <img src="../Image/navLeftImg.jpg" id="slideLeft" class="slide-controls__left">

                    <div class="slide-controls-word">

                        <div id="slide-controlText" class="slide-control owl-carousel owl-theme" style="margin-top: 0">
                                <div><p class="slide-controlElem">видюха1</p></div>
                                <div><p class="slide-controlElem">видюха2</p></div>
                                <div><p class="slide-controlElem">видюха3</p></div>
                                <div><p class="slide-controlElem">видюха4</p></div>
                                <div><p class="slide-controlElem">видюха5</p></div>
                        </div>

                    </div>

                <img src="../Image/navRightImg.jpg" id="slideRight" class="slide-controls__right" alt="вправо">
</div>



<div class="wrappVideo">
    <h1></h1>
    <div class="video"></div>
</div>
    <script src="/owncarousel2/owl.carousel.min.js"></script>
<script src="../JavaScript/abotUsIron.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#ironCarousel").owlCarousel({
                items: 3,
                touchDrag: false,
                mouseDrag:false,
                loop: true,
                dots: false,
                responsive: {
                    0: {
                        nav: false,
                        items: 1,
                        dots: false,
                        margin: 10,
                    },
                    240: {
                        nav: false,
                        items: 1,
                        margin: 10,
                        dots: false
                    },
                    320: {
                        nav: false,
                        items: 1,
                        margin: 10,
                        dots: false
                    },
                    480: {
                        dots: false,
                        margin: 10,
                        items: 2,
                        nav: false,
                    },
                    640: {
                        dots: false,
                        nav: false,
                        items: 3,
                    },
                    876: {
                        dots: false,
                        nav: false,
                        items: 3,
                        margin: 10
                    },
                    1300: {
                        items: 3,
                        dots: false,
                        nav: false,
                        margin: 10
                    }
                }
            });
                $('#slide-controlText').owlCarousel({
                margin: 10,
                    touchDrag: false,
                    mouseDrag:false,
                    loop: true,
                    items: 1,
                dots: false
            });
                $('#ironInfoD').owlCarousel({
                    margin: 10,
                    touchDrag: false,
                    mouseDrag:false,
                    loop: true,
                    items: 1,
                    dots: false
                });
        });
    </script>
<?php
require 'Parts/Footer.php';
?>
