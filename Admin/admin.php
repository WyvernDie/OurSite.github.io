<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Страница</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/admin.css">
    </head>
    <body>
        <div class="log">
                <form action="adminNav.php" method="post">
                    <p><b>Авторизация Для Админа </b></p>
                    <?
                        if (($_SESSION['auth'] == 1)){
                            ?>
                            <p>Введены неверные данные</p>
                    <?
                        }
                    ?>
                    <input name="login" placeholder="Логин"><br><br>
                    <input type="password" name="password" placeholder="Пароль"><br><br>
                    <input type="submit" value="Войти">
                </form>
        </div>
    </body>
</html>