<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Login</title>
    </head>
    <body>';


$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
$filePath = implode('/',$filePath);
$login = "http://" . $_SERVER['HTTP_HOST'] . $filePath . "/login.php";
$content1 = "http://" . $_SERVER['HTTP_HOST'] . $filePath . "/content1.php";

session_start();
if(!isset($_SESSION['username'])){
    echo "You must login to view this page.<br>";
    echo "click <a href='" . $login . "'>here</a> to return to the login";
}
else{
    echo "<h5>There's not much here.</h5><br>";
    echo "Click <a = href='" . $login . "'>here</a> to return to the login.<br>";
    echo "Click <a = href='" . $content1 . "'>here</a> to return to Content 1.\n";
}



?>