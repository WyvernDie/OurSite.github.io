<?php
require_once '../../../Actions/dbConnecting.php';
require_once '../../../Actions/check.php';
function getExtension1($filename){return end(explode(".", $filename));} // Функция возвращающая расширение файла

$id=$_POST['id'];

if(!empty($_POST['nameFooter'])){
    $name = $_POST['nameFooter'];
}

if(!empty($_POST['namFooter'])){
    $nam = $_POST['namFooter'];
}

if(!empty($_POST['naFooter'])){
    if($id == 1){
        $na = 'tel:+' . $_POST['naFooter'];
    }
    if($id == 2) {
        $na= 'mailto:'.$_POST['naFooter'];
        if (!empty($_POST['TypicMail'])) {
            $na = $na . '?subject=' . $_POST['TypicMail'] ;
        }
    }
    if($id == 3){
        $na = $_POST['naFooter'];
    }

}

if(!empty($_POST['nameFooter'])) {
    $query = "UPDATE footermain SET description = '$name'  WHERE id = '$id'";
    $sql = mysqli_query($link, $query);
}

if(!empty($_POST['namFooter'])) {
    $query = "UPDATE footermain SET infoLink = '$nam'  WHERE id = '$id'";
    $sql = mysqli_query($link, $query);
}

if(!empty($_POST['naFooter'])) {
    $query = "UPDATE footermain SET infoDescription = '$na'  WHERE id = '$id'";
    $sql = mysqli_query($link, $query);
}


header('Location: mailFooterEditing.php');

mysqli_close($link);
?>