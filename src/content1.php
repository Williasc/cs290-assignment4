<?php

echo '<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Login</title>
    </head>
    <body>';
    
//taken from week 5 source code on how to create the appropriate URL
//for each page's navigation
$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
$filePath = implode('/',$filePath);
$login = "http://" . $_SERVER['HTTP_HOST'] . $filePath . "/login.php";
$logout = "http://" . $_SERVER['HTTP_HOST'] . $filePath . "/login.php?action=logout";
$content2 = "http://" . $_SERVER['HTTP_HOST'] . $filePath . "/content2.php";

if($_POST['username'] == NULL && $_SESSION['username'] == NULL){
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
    if(!isset($_SESSION['visits'])){
        $_SESSION['visits'] = 0;
    }
    
    
    echo "Hello, $_SESSION[username], you've been here $_SESSION[visits] times before! <br>";
    echo "Click <a href='" . $logout . "'>here</a> to logout.<br>";
    echo "Click <a href='" . $content2 . "'>here</a> to visit Content 2.";
    $_SESSION['visits']++;
}
    
    
?>