<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';

$query = "SELECT TOP(1) FROM newsMain ORDER BY actionStartDate ASC "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$newsDatas = array();
$newsDatas[] = mysqli_fetch_array($result);
$id = $newsDatas['id'];
$query = "DELETE FROM newsmain WHERE id = $id ";
$sql =  mysqli_query($link, $query);
header('Location: newsEditingMain.php');