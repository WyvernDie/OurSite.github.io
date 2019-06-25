<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';

$query = "SELECT  * FROM newsMain ORDER BY actionStartDate ASC LIMIT 1"; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$newsDatas = array();
$newsDatas[] = mysqli_fetch_array($result);
$id = $newsDatas['0']['id'];
$query = "DELETE FROM newsmain WHERE id = '$id' ";
$sql =  mysqli_query($link, $query);

header('Location: newsEditingMain.php');

