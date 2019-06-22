<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

$id=$_POST['id'];
if(!empty($_POST['packageName'])){
    $packageName = $_POST['packageName'];
}
if(!empty($_POST['openingHours'])){
    $openingHours = $_POST['openingHours'];
}
if(!empty($_POST['cost'])){
    $cost = $_POST['cost'];
}

if(!empty($_POST['inputfile'])){
    $inputfile = $_POST['inputfile'];
}
//$_FILES['inputfile']['name'] = $_POST['name'] . '.' . getExtension1($_FILES['inputfile']['name']);
//
//if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл
//    $destiation_dir = '../../../Image/Price/' . $_FILES['inputfile']['name']; // Директория для размещения файла
//    unlink($destiation_dir = '../../../Image/Games/' . $_POST['link']);
//    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
//}

if(!empty($_POST['openingHours'])) {
    $query = "UPDATE price SET OpeningHours = '$openingHours'  WHERE id = $id ";
    $sql = mysqli_query($link, $query);
}

if(!empty($_POST['packageName'])) {
    $query = "UPDATE price SET PackageName = '$packageName' WHERE id = $id";
    $sql = mysqli_query($link, $query);
}

if(!empty($_POST['cost'])) {
    $query = "UPDATE price SET Cost = '$cost' WHERE id = $id ";
    $sql = mysqli_query($link, $query);
}

if(!empty($_POST['inputfile'])) {
    $query = "UPDATE price SET iconLink = '$inputfile' WHERE id = $id ";
    $sql = mysqli_query($link, $query);
}

header('Location: priceEditing.php');

mysqli_close($link);
?>