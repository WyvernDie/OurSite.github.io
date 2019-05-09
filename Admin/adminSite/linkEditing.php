<?php
require '../../Actions/dbConnecting.php ';
require '../../Actions/check.php';
?>
<!DOCTYPE>
<html>
<head>
    <link href="../../CSS/admin.css" rel="stylesheet">
    <link href="../../CSS/Header_Footer_Styles.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div class="slide-container">
    <div class="slide">
        <div class="slide-content">Slide 1 contents</div>
        <img src="../Image/block_r.png" height="48px" class="s">
        <img src="../Image/block_l.png" height="48px" class="p">
        <div id="hidden_panel">
            <div id="hidden_panel2"><a href="#kor">как добраться</a></div>
            <div id="hidden_panel2"><a> якорь </a></div>
            <div id="hidden_panel2"><a> якорь </a></div>
            <div id="hidden_panel2"><a> якорь </a></div>
            <div id="hidden_panel2"><a> якорь </a></div>
            <? if ($ses) {
                ?>
                <a class="editing" href="#">Редактировать Блок</a>
            <? } ?>
        </div>
    </div>
</div>
</body>
</html>
<?
mysqli_close($link);
?>
