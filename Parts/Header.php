<?
require 'Actions/check.php';
require 'Actions/dbConnecting.php ';
$query = "SELECT * FROM dbmenu "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$menuDatas = array();
$k = mysqli_num_rows($result);
while ($i < $k) {
    $menuDatas[] = mysqli_fetch_array($result);
    $i++;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width= device-width, initial-scale=1.0"/>
    <title>Сайт</title>
    <link rel="stylesheet" href="../CSS/Header_Footer_Styles.css" />
    <link rel="stylesheet" href="../CSS/Global.css"/>
    <link rel="stylesheet" href="../CSS/Body_Styles.css"/>
    <link rel="stylesheet" href="../CSS/game.css"/>
    <link rel="stylesheet" href="../CSS/admin.css"/>
    <link rel="stylesheet" href="../CSS/sliderStyle.css">
    <link rel="stylesheet" href="../CSS/responsiveDesign.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="../JavaScript/hearerMenu.js" type="text/javascript"></script>
    <script src="../JavaScript/headerScrolling.js" type="text/javascript"></script>
    <script src="../JavaScript/menu-block.js" type="text/javascript"></script>

</head>
<body>
<!--    <header class="vezde">-->
<!--        <div class="imag-m">-->
<!--            <img src="../Image/shelter.png" class="graficlogo" id="imm">-->
<!--            <img src="../Image/menuBackground.png" alt="menu" id="fon-menu">-->
<!--            <nav class="header-block">-->
<!--                --><?// foreach ($menuDatas as $menuData) { ?>
<!--                    <div class="punkt"><a href="--><?// echo $menuData['link']; ?><!--"> <p>--><?// echo $menuData['name']; ?><!--</p> </a></div>-->
<!--                --><?// } ?>
<!--                --><?// if(!$ses){?>
<!--                    <div class="punkt"><a href="../Admin/admin.php">Администратор</a></div>-->
<!--                --><?//}else {?>
<!--                    <div class="punkt"><a class="editing" href="../Admin/adminSite/header/headerEditing.php"><p>Редактировать Блок</p></a></div>-->
<!--                    <div class="punkt"><a href="../Admin/adminExit.php">Выход</a></div>-->
<!--                --><?//}?>
<!--            </nav>-->
<!--        </div>-->
<!--    </header>-->

<header class="vezde">
    <div class="imag-m">
        <img src="../Image/menuBackground.png" alt="menu" id="fon-menu">
        <img src="../Image/shelt.png" class="graficlogo" id="imm">
        <nav class="header-block">
            <div class="punkt"><a href="../index.php">главная</a></div>
            <div class="punkt"><a href="news.php">новости</a></div>
            <div class="punkt"><a href="#">цены</a></div>
            <div class="punkt"><a href="#" id="nas">о нас</a></div>
            <div class="punkt"><a href="../Admin/admin.php">Администратор</a></div>
            <button  type="button" id="elem" class="punkt punktz"><a href="#free">&#9776</a></button>
            <div id="phone-menu" class="menu-block">
                <h4 class="h4"><a href="#" class="menu-mini">Главная</a></h4>
                <hr class="hr">
                <h4 class="h4"><a href="#" class="menu-mini">Цены</a></h4>
                <hr class="hr">
                <h4 class="h4"><a href="../news.php" class="menu-mini">Новости</a></h4>
                <hr class="hr">
                <h4 class="h4"><a href="#" class="menu-mini">О нас</a></h4>
                <hr class="hr">
                <h4 class="h4"><a href="../Admin/admin.php" class="menu-mini">Администратор</a></h4>
                <hr class="hr">
            </div>
        </nav>

    </div>
</header>