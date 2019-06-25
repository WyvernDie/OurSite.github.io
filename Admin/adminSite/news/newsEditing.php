<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';

$id = $_POST['id'];
$query = "SELECT * FROM newsmain WHERE id = '$id'"; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$newsDatas = array();
$k = mysqli_num_rows($result);
while ($i < $k) {
    $newsDatas[] = mysqli_fetch_array($result);
    $i++;
}


mysqli_close($link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width= device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../../CSS/game.css"/>
    <link rel="stylesheet" href="../../../CSS/admin.css"/>
    <link rel="stylesheet" href="../../../CSS/sliderStyle.css">
</head>
<body>
<a href="../../../index.php" class="main"><h1>На Главную</h1></a>
<a href="newsEditingMain.php" class="main"><h1>На предыдушую </h1></a>
<form method="post" action="Editing.php" enctype="multipart/form-data">
    <table>
        <tr>
            <? foreach ($newsDatas as $newsData ) { ?>
                <td><img src="../../../Image/news/<? echo $newsData['newsImageLink']; ?>"></td>
                <td><? echo $newsData['newsTitle']; ?></td>
                <td><? echo $newsData['newsSubtitle']; ?></td>
                <td><? echo $newsData['newsDescription']; ?></td>
                <td><? echo $newsData['actionStartDate']; ?></td>
                <td><? echo $newsData['actionFinishDate']; ?></td>
            <? } ?>
        </tr>
        <tr>
            <td>
                <input type="file" name="inputfile">
                <input class="id" name="id" value="<? echo $newsData['id']; ?>">
                <input class="id" name="link" value="<? echo $newsData['newsImageLink']; ?>">
            </td>
            <td><input type="text" name="title"></td>
            <td><input type="text" name="subtitle"></td>
            <td><input type="text" name="text"></td>
            <td><input type="date" name="actionStartDate"></td>
            <td><input type="date" name="actionFinishDate"></td>

        </tr>
    </table>
    <input type="submit" value="Изменить"/>
</form>
</body>
</html>