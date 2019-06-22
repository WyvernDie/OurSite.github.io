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
    <link href="../../../CSS/phone-menu-elements.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<header class="vezde global-header">
    <button type="button" id="elem" class="punkt punktz">
        <a href="#free">&#9776</a>
    </button>
    <div id="phone-menu" class="menu-block">
        <?foreach ($menuDatas as $menuData){?>
            <h4 class="h4">
                <a class="btn-6" href="<? echo $menuData['link']; ?>">
                    <? echo $menuData['name']; ?>
                    <span></span>
                </a>
            </h4>
            <hr class="hr">
        <?}?>
    </div>
    <div class="imag-m">
        <img src="../../../Image/menuBackground.png" alt="menu" id="fon-menu">
        <img src="../../../Image/shelt.png" class="graficlogo" id="imm">
        <nav class="header-block">
            <?foreach ($menuDatas as $menuData){?>
                <div class="punkt" id="parth-menu1">
                    <a class="btn-6" href="../../../<? echo $menuData['link']; ?>">
                        <? echo $menuData['name']; ?>
                        <span></span>
                    </a>
                </div>
            <?}
            if ($ses){?>
                <div class="punkt" id="parth-menu1">
                    <a class="btn-6 editing" href="../../../Admin/adminSite/header/headerEditing.php">
                        <p>Редактировать Блок</p>
                        <span></span>
                    </a>
                </div>
                <div class="punkt" id="parth-menu1">
                    <a class="btn-6" href="../../../Admin/adminExit.php">Выход</a>
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

