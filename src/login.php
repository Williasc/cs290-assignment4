<?php
echo '<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Login</title>
    </head>
    <body>
        <form action = "content1.php" method = "POST">
            Username:
            <input type = "text" name = "username">
            <input type = "submit" value = "Login">
        </form>
    <body>
<html>';

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    $_SESSION = array();
    //this code was used from the php.net documentation on session_destroy()
    //to get rid of cookies
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
    echo "You've been logged out.\n";
}


?>