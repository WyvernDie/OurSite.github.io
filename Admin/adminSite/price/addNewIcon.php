<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

$query = "SELECT * FROM priceicon "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$priceIconDatas = array();
$k = mysqli_num_rows($result);
$_SESSION['transition'] = true;

if ($_POST['action'] == 'add') {

    $query = "SELECT * FROM priceicon ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($link, $query);
    $lastRows = array();
    $lastRows = mysqli_fetch_array($result);


    $_FILES['inputfile']['name'] = $lastRows['id'] + 1 . '.' . getExtension1($_FILES['inputfile']['name']);
    $iconName = $_FILES['inputfile']['name'];
    if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл
        $destiation_dir = '../../../Image/priceList/' . $_FILES['inputfile']['name']; // Директория для размещения файла
        move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
    }
    $query = "INSERT INTO priceicon (iconName) VALUES ('$iconName') ";
    $sql = mysqli_query($link, $query);
}

if ($_POST['action'] == 'delete') {
    $id = $_POST['id'];
    $query = "SELECT * FROM priceicon WHERE id = '$id' ";
    $result = mysqli_query($link, $query);
    $needRows = array();
    $needRows = mysqli_fetch_array($result);

    unlink($destiation_dir = '../../../Image/priceList/' . $needRows['iconName'] );
    $query = "DELETE FROM priceicon WHERE  id = '$id' ";
    $sql = mysqli_query($link, $query);
}

header('Location: phoneCostEditing.php');
mysqli_close($link);

