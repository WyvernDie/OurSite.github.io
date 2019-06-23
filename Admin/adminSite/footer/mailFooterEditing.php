<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width= device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../../CSS/game.css"/>
    <link rel="stylesheet" href="../../../CSS/admin.css"/>
    <link rel="stylesheet" href="../../../CSS/footerStyles.css"/>
</head>
<body>
<a href="../../../index.php" class="main"><h1>На Главную</h1></a>
<table>
    <tr>
        <td>id</td>
        <td>Иконка</td>
        <td>Название</td>
        <td>Иформация</td>
        <td>Информация для ссылки</td>
        <td>Действие</td>
    </tr>
    <?foreach($footerDatas as $footerData){?>
        <tr>
            <td> <? echo $footerData['id']?></td>
            <td>
                <div class="footerIcon">
                    <div class="footerIconShadow">
                        <a href="#">
                            <img src="../../../Image/FooterIcon/<? echo $footerData['iconLink'];?>" alt="<? echo $footerData['iconAlt'];?>">
                        </a>
                    </div>
                </div>
            </td>
            <td> <? echo $footerData['description']?></td>
            <td> <? echo $footerData['infoLink']?></td>
            <td> <? echo $footerData['infoDescription']?></td>
            <td>
                <form action="footerEditing.php" method="POST">
                    <input class="id" name="id" value="<? echo $footerData['id']; ?>">
                    <input class="id" name="action" value="delete">
                    <input type="submit" value="Удалить">
                </form><br>
                <form action="footerEditing.php" method="POST" enctype="multipart/form-data">
                    <input type="submit" value="Редактировать">
                    <input class="id" name="id" value="<? echo $footerData['id']; ?>">
                    <input class="id" name="action" value="edit">
                </form>
            </td>
        </tr>
    <?}?>
</table>
</body>
</html>