<?php
session_start();
require '../../../Actions/dbConnecting.php';
header("Location: headerEditing.php");

if (isset($_POST['nameR'])) {
    $id = $_POST['id'];
    $replaceName = $_POST['nameR'];
    echo $replaceName;
    $queryReplace = "UPDATE dbmenu SET name = '$replaceName' WHERE id='$id'";
    $replaceResult = mysqli_query($link, $queryReplace) or die("Ошибка " . mysqli_error($link));
}



