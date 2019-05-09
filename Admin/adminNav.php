<?php
session_start();
require '../Actions/dbConnecting.php';

$query ="SELECT * FROM sighn "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$datas = array();
$k = mysqli_num_rows($result);
while($i<$k){
    $datas[] = mysqli_fetch_array($result);
    $i++;
}

if ( !empty($_POST['password']) and !empty($_POST['login']) ) {
    //Пишем логин и пароль из формы в переменные (для удобства работы):
    $pwd = $_POST['password'];
    $lgn = $_POST['login'];


    foreach ($datas as $data){
        $wert = password_verify($pwd, $data['password']);
        if ($lgn == $data['login']){
            $true = 1;
        }
    }




    if (($wert) AND ($true)){
        header("Location: ../Index.php");
        $_SESSION['auth'] = 2;
        $_SESSION['admin'] = true;

    } else {
        $_SESSION['auth'] = 1;
        $_SESSION['admin'] = false;
        header("Location: admin.php");

    }
}
?>

