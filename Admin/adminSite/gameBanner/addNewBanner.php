<?
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

if ( isset($_POST['name'])&& !empty($_POST['name'])){

    $_FILES['inputfile']['name'] = $_POST['name'] . '.' . getExtension1($_FILES['inputfile']['name']);
    $linkName = $_FILES['inputfile']['name'];
    $description = $_POST['description'];
    $gameName = $_POST['name'];
    if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл
        $destiation_dir = '../../../Image/Games/' . $_FILES['inputfile']['name']; // Директория для размещения файла
        move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
    }
    $query = "INSERT INTO `dbgame` ( `gameName`, `description`, `linkName`) VALUES ( '$gameName', '$description', '$linkName')";
    $sql = mysqli_query($link, $query);
    header('Location: gameEditing.php');
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
<a href="../../../index.php" class="main"> <h1>На Главную</h1></a>
<form method="post" action="addNewBanner.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Название</td>
            <td>
                <input name="name">
            </td>
        </tr>
        <tr>
            <td>Описание</td>
            <td>
                <textarea name="description" id="description"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <p>Картинка</p><br>
                <p>Разрешение: 2560 X 1600</p>
            </td>
            <td>
                <input type="file" name="inputfile"></br>
            </td>
        </tr>
    </table>
    <input type="submit" value="Добавить"/>
</form>
</body>
</html>
