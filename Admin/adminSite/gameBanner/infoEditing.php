<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

$id=$_POST['id'];
if(!empty($_POST['name'])){
    $gameName = $_POST['name'];
    $linkName = $gameName. '.' . getExtension1($_POST['link']);
}
if(!empty($_POST['description'])){
    $description = $_POST['description'];
}
$_FILES['inputfile']['name'] = $_POST['name'] . '.' . getExtension1($_FILES['inputfile']['name']);

if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) { // Проверяем, загрузил ли пользователь файл

    $destiation_dir = '../../../Image/Games/' . $_FILES['inputfile']['name']; // Директория для размещения файла
    unlink($destiation_dir = '../../../Image/Games/' . $_POST['link']);
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
}

if(!empty($_POST['description'])) {
    $query = "UPDATE dbGame SET description = '$description'  WHERE id = $id ";
    $sql = mysqli_query($link, $query);
}

if(!empty($_POST['name'])) {
    $query = "UPDATE dbGame SET gameName = '$gameName' WHERE id = $id ";
    $sql = mysqli_query($link, $query);
}

header('Location: gameEditing.php');

mysqli_close($link);
?>