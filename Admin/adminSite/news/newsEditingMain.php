<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';

$query = "SELECT * FROM newsMain ORDER BY actionStartDate DESC "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$newsDatas = array();
$k = mysqli_num_rows($result);
$i=0;
while ($i < $k) {
    $newsDatas[] = mysqli_fetch_array($result);
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
<form action="addNewNews.php" method="post">
    <input type="submit" value="Добавить Новую Новость"/>
</form>
<table>
    <tr>
        <td>id</td>
        <td>Картинка</td>
        <td>Заголовок</td>
        <td>Подзаголовок</td>
        <td>Текст</td>
        <td>Дата Начала</td>
        <td>Дата Окончания</td>
        <td>Действие</td>
    </tr>
    <?foreach($newsDatas as $newsData){?>
        <tr>
            <td><? echo $newsData['id']; ?></td>
            <td><img src="../../../Image/news/<? echo $newsData['newsImageLink']; ?>"></td>
            <td><? echo $newsData['newsTitle']; ?></td>
            <td><? echo $newsData['newsSubtitle']; ?></td>
            <td><? echo $newsData['newsDescription']; ?></td>
            <td><? echo $newsData['actionStartDate']; ?></td>
            <td><? echo $newsData['actionFinishDate']; ?></td>
            <td>
                <form action="newsEditing.php" method="post">
                    <input type="submit" value="изменить"/>
                    <input class="id" name="id" value="<? echo $newsData['id']; ?>">
                </form>
            </td>
        </tr>
    <?}?>
</table>
</body>
</html>