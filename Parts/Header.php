<?
require 'Actions/check.php';
require 'Actions/dbConnecting.php ';

$query = "SELECT * FROM dbmenu "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$menuDatas = array();
$k = mysqli_num_rows($result);
$i=0;
while ($i < $k) {
    $menuDatas[] = mysqli_fetch_array($result);
    $i++;
}

$query = "SELECT * FROM footermain "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$footerDatas = array();
$k = mysqli_num_rows($result);
$i=0;
while ($i < $k) {
    $footerDatas[] = mysqli_fetch_array($result);
    $i++;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width= device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">

    <title>Сайт</title>

    <link rel="stylesheet" href="../CSS/phone-menu-elements.css"/>
    <link rel="stylesheet" href="../owncarousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owncarousel2/assets/owl.theme.default.css">
    <link rel="stylesheet" href="../CSS/Header_Footer_Styles.css" />
    <link rel="stylesheet" href="../CSS/Global.css"/>
    <link rel="stylesheet" href="../CSS/Body_Styles.css"/>
    <link rel="stylesheet" href="../CSS/game.css"/>
    <link rel="stylesheet" href="../CSS/admin.css"/>
    <link rel="stylesheet" href="../CSS/sliderStyle.css">
    <link rel="stylesheet" href="../CSS/responsiveDesign.css"/>
    <link rel="stylesheet" href="../CSS/aboutUsStyles.css"/>
    <link rel="stylesheet" href="../CSS/priceList.css"/>
    <link rel="stylesheet" href="../CSS/newsCss.css"/>
    <link rel="stylesheet" href="../CSS/adaptiv.css"/>
    <link rel="stylesheet" href="../CSS/footerStyles.css">
    <link rel="stylesheet" href="../CSS/animate.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../JavaScript/hearerMenu.js" type="text/javascript"></script>
    <script src="../JavaScript/headerScrolling.js" type="text/javascript"></script>
    <script src="../JavaScript/menu-block.js" type="text/javascript"></script>
    <script src="../JavaScript/codepen.js" type="text/javascript"></script>
    <script src="../JavaScript/wow.min..js" type="text/javascript"></script>
    <script> new WOW().init();</script>
    
</head>
<body>
    <div class="wrapper">
    <header class="vezde global-header">
        <button type="button" id="elem" class="punkt punktz">
            <a href="#free">&#9776</a>
        </button>
        <div id="phone-menu" class="menu-block">
            <?foreach ($menuDatas as $menuData){?>
                <h4 class="h4">
                    <a class="btn-6" href="<? echo $menuData['link']; ?>">
                        <? echo $menuData['name']; ?>
                        <span></span>
                    </a>
                </h4>
                <hr class="hr">
            <?}?>
            <div class="h4">
                <a href="tel:+7(977)-271-87-34">
                    <div class="">
                            <img src="../Image/FooterIcon/phone.png" width="30px">
                    </div>
                </a>

            </div>
        </div>
        <div class="imag-m">
            <img src="../Image/menuBackground.png" alt="menu" id="fon-menu">
            <a href="index.php">
                <img src="../Image/shelter.png" class="graficlogo" id="imm" >
            </a>

            <nav class="header-block">
                <?foreach ($menuDatas as $menuData){?>
                    <div class="punkt" id="parth-menu1">
                        <a class="btn-6" href="<? echo $menuData['link']; ?>">
                            <? echo $menuData['name']; ?>
                            <span></span>
                        </a>
                    </div>
                <?}
                if ($ses){?>
                    <div class="punkt" id="parth-menu1">
                        <a class="btn-6 editing" href="../Admin/adminSite/header/headerEditing.php">
                            <p>Редактировать Блок</p>
                            <span></span>
                        </a>
                    </div>
                    <div class="punkt" id="parth-menu1">
                        <a class="btn-6" href="../Admin/adminExit.php">Выход</a>
                    </div>
                <?}?>
            </nav>
        </div>
    </header>
    <div class="content">

