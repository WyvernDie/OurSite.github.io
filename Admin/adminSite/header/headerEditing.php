<?
require '../../../Actions/dbConnecting.php ';
require '../../../Actions/check.php';
$query = "SELECT * FROM dbmenu "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$menuDatas = array();
$k = mysqli_num_rows($result);
while ($i < $k) {
    $menuDatas[] = mysqli_fetch_array($result);
    $i++;
}
$_FILES['inputfile']['name'] = 'shelter.png';
if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл
    $destiation_dir = '../../../Image/'.$_FILES['inputfile']['name']; // Директория для размещения файла
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию

}
?>
<!DOCTYPE>
<html>
<head>
    <link href="../../../CSS/admin.css" rel="stylesheet">
    <link href="../../../CSS/Header_Footer_Styles.css" rel="stylesheet">
    <link href="../../../CSS/Global.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<header class="vezde">
    <div class="imag-m">
        <img src="../../../Image/menuBackground.png" alt="menu" id="fon-menu">
        <img src="../../../Image/shelter.png" class="graficlogo" id="imm">
        <nav class="header-block">
            <?foreach ($menuDatas as $menuData){?>
                <div class="punkt" id="parth-menu1">
                    <a href="../../../<? echo $menuData['link']; ?>"> <p><? echo $menuData['name']; ?></p> </a>
                </div>
            <?}?>
        </nav>
    </div>
</header>
<div class="table">
    <table>
        <?
        foreach ($menuDatas as $menuData) {
            ?>
            <tr>
                <td><? echo $menuData['id']; ?></td>
                <td><? echo $menuData['name']; ?></td>
                <td><? echo $menuData['description']; ?></td>
                <td>
                    <form action="menuEditing.php" method="POST">
                        <input name="nameR" placeholder="Введите Название">
                        <input class="id" name="id" value="<? echo $menuData['id']; ?>">
                        <input type="submit">
                    </form>
                </td>
            </tr>
        <? } ?>
        <tr>
            <td><? echo $k + 1; ?></td>
            <td><img src="../../../Image/shelter.png" width="100px"></td>
            <td>
                <p>Фото в меню</p><br>
                <p>(Требуется загрузить изображение с прозрачным фоном)</p>
            </td>
            <td>
                <form method="post" action="headerEditing.php" enctype="multipart/form-data">
                    <input type="file" name="inputfile"></br>
                    <input type="submit" value="Загрузить">
                </form>
            </td>

        </tr>
    </table>
</div>

</body>
</html>
<?
mysqli_close($link);
?>

