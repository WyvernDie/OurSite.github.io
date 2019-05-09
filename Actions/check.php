<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if ( $_SESSION['admin'])
    $ses = true;
?>