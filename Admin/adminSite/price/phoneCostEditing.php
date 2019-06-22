<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';

if($_POST['action']== 'delete'){
    $id = $_POST['id'];
    $query = "DELETE FROM price WHERE  id = '$id' ";
    $sql = mysqli_query($link, $query);
    header('Location: gameEditing.php');
}

if($_POST['action']== 'edit'){
    $id = $_POST['id'];
    $query = "SELECT * FROM price WHERE id = '$id'"; //строка запроса на языке SQL.
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $menuDatas = array();
    $k = mysqli_num_rows($result);
    while ($i < $k) {
        $gameDatas[] = mysqli_fetch_array($result);
        $i++;
    }
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
</head>
<body>
<a href="../../../index.php" class="main"><h1>На Главную</h1></a>
<form method="post" action="infoEditing.php" enctype="multipart/form-data">
    <table>
        <?
        foreach ($gameDatas as $gameData) {
            ?>
            <tr>
                <td><? echo $gameData['gameName']; ?></td>
                <td><? echo $gameData['description']; ?></td>
                <td><img src="../../../Image/Games/<? echo $gameData['linkName']; ?>" width="140px"></td>
            </tr>
        <? } ?>
        <tr>
            <td>
                <input name="name">
            </td>

            <td>
                <textarea name="description" id="description"></textarea>
            </td>

            <td>
                <input type="file" name="inputfile">
                <input class="id" name="link" value="<? echo $gameData['linkName']; ?>">
                <input class="id" name="id" value="<? echo $gameData['id']; ?>">
            </td>
        </tr>
    </table>
    <input type="submit" value="Изменить"/>
</form>
</body>
</html>
