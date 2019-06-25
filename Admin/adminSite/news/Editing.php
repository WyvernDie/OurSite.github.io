<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

$id=$_POST['id'];

if(!empty($_POST['title'])){
    $title = $_POST['title'];

}
if(!empty($_POST['subtitle'])){
    $subtitle = $_POST['subtitle'];
}
if(!empty($_POST['text'])){
    $text = $_POST['text'];
}
if(!empty($_POST['actionStartDate'])){
    $actionStartDate = $_POST['actionStartDate'];
}
if(!empty($_POST['actionFinishDate'])){
    $actionFinishDate = $_POST['actionFinishDate'];
}


if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл
    $destiation_dir = '../../../Image/news/' . $_FILES['inputfile']['name']; // Директория для размещения файла
    unlink($destiation_dir = '../../../Image/Games/' . $_POST['link']);
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
    $imageLinkName = $_FILES['inputfile']['name'] ;
}

if(!empty($_FILES['inputfile']['name'])) {
    $query = "UPDATE newsmain SET  newsImageLink= '$imageLinkName' WHERE id = '$id' ";
    $sql = mysqli_query($link, $query);
}
if(!empty($_POST['title'])) {
    $query = "UPDATE newsmain SET newsTitle= '$title' WHERE id = '$id' ";
    $sql = mysqli_query($link, $query);
}
if(!empty($_POST['subtitle'])) {
    $query = "UPDATE newsmain SET newsSubtitle= '$subtitle' WHERE id = '$id' ";
    $sql = mysqli_query($link, $query);
}
if(!empty($_POST['text'])) {
    $query = "UPDATE newsmain SET newsDescription= '$text' WHERE id = '$id' ";
    $sql = mysqli_query($link, $query);
}
if(!empty($_POST['actionStartDate'])) {
    $query = "UPDATE newsmain SET actionStartDate= '$actionStartDate' WHERE id = '$id' ";
    $sql = mysqli_query($link, $query);
}
if(!empty($_POST['actionFinishDate'])) {
    $query = "UPDATE newsmain SET actionFinishDate = '$actionFinishDate' WHERE id = '$id' ";
    $sql = mysqli_query($link, $query);
}

header('Location: newsEditingMain.php');

mysqli_close($link);
?>
