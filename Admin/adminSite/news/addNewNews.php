<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));}

if((isset($_POST['Title']))&& (!empty(($_POST['Title'])))){
    $_FILES['inputfile']['name'] = $_POST['Title'] . '.' . getExtension1($_FILES['inputfile']['name']) ;
    $linkName = $_FILES['inputfile']['name'];
    $title = $_POST['Title'];
    $subtitle = $_POST['Subtitle'];
    $text = $_POST['Text'];
    $actionStartDate = $_POST['actionStartDate'];
    $actionFinishDate = $_POST['actionFinishDate'] ;
    if( (isset($_FILES))&&($_FILES['inputfile']['errors'] == 0 )){
        $destiation_dir = '../../../Image/news/' . $_FILES['inputfile']['name'];
        move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir);
    }
    $query = "INSERT INTO newsmain (newsImageLink, newsTitle, newsSubtitle, newsDescription, actionStartDate, actionFinishDate) VALUES ('$linkName', '$title', '$subtitle', '$text', '$actionStartDate', '$actionFinishDate')";
    $sql = mysqli_query($link, $query);
    

    $query = "SELECT TOP(1) FROM newsMain ORDER BY actionStartDate ASC "; //строка запроса на языке SQL.
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $newsDatas = array();
    $newsDatas[] = mysqli_fetch_array($result);
    $id = $newsDatas['id'];
    $query = "DELETE FROM newsmain WHERE id = $id ";
    $sql =  mysqli_query($link, $query);

    header('Location: newsEditingMain.php');
}

mysqli_close($link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width= device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../../CSS/game.css"/>
    <link rel="stylesheet" href="../../../CSS/admin.css"/>
    <link rel="stylesheet" href="../../../CSS/footerStyles.css"/>
</head>
<body>
<a href="../../../index.php" class="main"><h1>На Главную</h1></a>

<form action="addNewNews.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Картинка</td>
            <td>Заголовок</td>
            <td>Подзаголовок</td>
            <td>Текст</td>
            <td>Дата Начала</td>
            <td>Дата Окончания</td>
        </tr>
        <tr>
            <td><input type="file" name="inputfile"></td>
            <td><input type="text" name="Title" /></td>
            <td><input type="text" name="Subtitle" /></td>
            <td><input type="text" name="Text" /></td>
            <td><input type="date" name="actionStartDate" /></td>
            <td><input type="date" name="actionFinishDate" /></td>
        </tr>
    </table>
    <input type="submit" value="Добавить"/>
</form>
</body>
</html>