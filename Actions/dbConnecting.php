<?php
    $host = 'localhost'; // адрес сервера
    $database = 'site'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = '';
    $link = mysqli_connect($host, $user, $password, $database)  or die("Ошибка " . mysqli_error($link));