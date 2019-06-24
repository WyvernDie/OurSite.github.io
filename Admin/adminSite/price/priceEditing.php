<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширени

$query = "SELECT * FROM price "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$priceDatas = array();
$k = mysqli_num_rows($result);
$d=0;
while ($d < $k) {
    $priceDatas[] = mysqli_fetch_array($result);
    $d++;
}

$query = "SELECT * FROM pricelist ";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$priceListImageData = mysqli_fetch_array($result);

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
        <table>
            <tr>
                <td>id</td>
                <td>Название Пакета</td>
                <td>Часы</td>
                <td>Стоимость</td>
                <td>Иконка</td>
                <td>Действие</td>
            </tr>

            <?
            foreach ($priceDatas as $priceData) {
                ?>
                <tr>
                    <td><? echo $priceData['id']; ?></td>
                    <td><? echo $priceData['PackageName']; ?></td>
                    <td><? echo $priceData['OpeningHours']; ?></td>
                    <td><? echo $priceData['Cost']; ?> руб.</td>
                    <td><img src="../../../Image/priceList/<? echo $priceData['iconLink']; ?>" width="140px"></td>
                    <td>
                        <form action="phoneCostEditing.php" method="POST">
                            <input class="id" name="id" value="<? echo $priceData['id']; ?>">
                            <input class="id" name="action" value="delete">
                            <input type="submit" value="Удалить">
                        </form><br>

                        <form action="phoneCostEditing.php" method="POST" enctype="multipart/form-data">
                            <input class="id" name="id" value="<? echo $priceData['id']; ?>">
                            <input class="id" name="action" value="edit">
                            <input class="id" name="transition" value="1">
                            <input type="submit" value="Редактировать">
                        </form>

                    </td>
                </tr>
            <? } ?>
            <tr>
                <td colspan="4">
                    <img src="../../../Image/priceList/<? echo $priceListImageData['imageLink']?>" width="80%">
                </td>
                <td colspan="2">
                    <form action="replacePriceList.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="inputfile">
                        <input type="submit" value="Заменить">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>