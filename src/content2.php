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

if($_POST['username'] == NULL){
    echo "You must login to view this page.<br>";
    echo "click <a href='" . $login . "'>here</a> to return to the login";
}
else{
    session_start();
}

if(session_status() == PHP_SESSION_ACTIVE){
    if(isset($_POST['username'])){
        $_SESSION['username'] = $_POST['username'];
    }
    
    echo "<h5<There's not much here.</h5>\n";
    echo "Click <a = href='" . $login . "'>here</a> to return to the login.\n";
    echo "Click <a = href='" . $content1 . "'>here</a> to return to Content 1.\n";
}



?>