<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

if($_POST['action']== 'delete'){
    $id = $_POST['id'];
    $query = "DELETE FROM price WHERE  id = '$id' ";
    $sql = mysqli_query($link, $query);
    header('Location: priceEditing.php');
}

if($_POST['action']== 'edit'){
    $id = $_POST['id'];
    $query = "SELECT * FROM price WHERE id = '$id'"; //строка запроса на языке SQL.
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $priceDatas = array();
    $k = mysqli_num_rows($result);
    $i=0;
    while ($i < $k) {
        $priceDatas[] = mysqli_fetch_array($result);
        $i++;
    }
    $query = "SELECT * FROM priceicon "; //строка запроса на языке SQL.
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $priceIconDatas = array();
    $k = mysqli_num_rows($result);
    $i=0;
    while ($i < $k) {
        $priceIconDatas[] = mysqli_fetch_array($result);
        $i++;
    }
    if ( isset($_FILES['inputfile']['name'])&& !empty($_FILES['inputfile']['name'])){

        $_FILES['inputfile']['name'] = $k+1 . '.' . getExtension1($_FILES['inputfile']['name']);
        $iconName = $_FILES['inputfile']['name'];
        if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл
            $destiation_dir = '../../../Image/priceList/' . $_FILES['inputfile']['name']; // Директория для размещения файла
            move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
        }
        $query = "INSERT INTO priceicon ( 'iconName') VALUES ('$iconName')";
        $sql = mysqli_query($link, $query);
        header('Location: phoneCostEditing.php');
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
<form method="post" action="phoneInfoEditing.php" enctype="multipart/form-data">
    <table>
        <?
        foreach ($priceDatas as $priceData) {
            ?>
            <tr>
                <td><img src="../../../Image/priceList/<? echo $priceData['iconLink']; ?>" width="140px"></td>
                <td><? echo $priceData['PackageName']; ?></td>
                <td><? echo $priceData['OpeningHours']; ?></td>
                <td><? echo $priceData['Cost']; ?> руб.</td>
            </tr>
        <? } ?>
        <tr>
            <td>
                <input name="inputfile">
                <input class="id" name="link" value="<? echo $priceData['linkName']; ?>">
                <input class="id" name="id" value="<? echo $priceData['id']; ?>">
            </td>

            <td>
                <input name="packageName">
            </td>

            <td>
                <input name="openingHours">
            </td>
            <td>
                <input name="cost">
            </td>
        </tr>
    </table>
    <input type="submit" value="Изменить"/>
</form>
    <table>
        <?
        foreach ($priceIconDatas as $priceIconData) {
            ?>
            <tr>
                <td><img src="../../../Image/priceList/<? echo $priceIconData['iconName']; ?>" width="140px"></td>
                <td><? echo $priceIconData['iconName']; ?></td>
            </tr>
        <? } ?>
    </table>
    <form action="phoneCostEditing.php" method="post" enctype="multipart/form-data">
        <input type="file" name="inputfile">
        <input type="submit" value="Добавить Новую Иконку">
    </form>
</body>
</html>
