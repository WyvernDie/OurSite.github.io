<?
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
$query = "SELECT * FROM dbGame "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$menuDatas = array();
$k = mysqli_num_rows($result);
while ($i < $k) {
    $gameDatas[] = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="../../../CSS/sliderStyle.css">
</head>
<body>
<a href="../../../index.php" class="main"> <h1>На Главную</h1></a>
<div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($gameDatas as $gameData) { ?>
                <div class="swiper-slide">
                    <div class="sliderContainer">
                        <img class="imageGame" src="../../../Image/Games/<? echo $gameData['linkName']; ?>">
                        <div class="infoGame">
                            <h2> <? echo $gameData['gameName']; ?> </h2>
                            <p> <? echo $gameData['description']; ?> </p>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="table">
    <table>
        <?
        foreach ($gameDatas as $gameData) {
            ?>
            <tr>
                <td><? echo $gameData['id']; ?></td>
                <td><? echo $gameData['gameName']; ?></td>
                <td><? echo $gameData['description']; ?></td>
                <td><img src="../../../Image/Games/<? echo $gameData['linkName']; ?>" width="140px"></td>
                <td>
                    <form action="Editing.php" method="POST">
                        <input class="id" name="id" value="<? echo $gameData['id']; ?>">
                        <input class="id" name="action" value="delete">
                        <input type="submit" value="Удалить">
                    </form><br>

                    <form action="Editing.php" method="POST">
                        <input class="id" name="id" value="<? echo $gameData['id']; ?>">
                        <input class="id" name="action" value="edit">
                        <input type="submit" value="Редактировать">
                    </form>

                </td>
            </tr>
        <? } ?>
    </table>
</div>
<form action="addNewBanner.php" method="POST">
    <input type="submit" value="Добавить новую игру">
</form>
<br>
<br>


<script src="../../../JavaScript/sliderJs.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
