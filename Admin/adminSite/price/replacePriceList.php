<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));}
header('Location: priceEditing.php');

if (isset($_FILES)) { // Проверяем, загрузил ли пользователь файл

    $query = "SELECT * FROM pricelist ";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $priceListImageData = mysqli_fetch_array($result);

    $_FILES['inputfile']['name'] = 'priceList' . '.' . getExtension1($_FILES['inputfile']['name']);
    $fileName = $_FILES['inputfile']['name'];
    $destiation_dir = '../../../Image/priceList/' . $_FILES['inputfile']['name']; // Директория для размещения файла
    unlink($destiation_dir = '../../../Image/priceList/' . $priceListImageData['imageLink'] );
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir);
    $query = "UPDATE priceList SET imageLink = '$fileName' ";

}
