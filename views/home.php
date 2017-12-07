<?php
session_save_path(__DIR__.'/data');
session_start();

require_once './core/config.php'; 
require_once './core/functions.php'; 

if (isset($_POST['submitLogin']))
{
    $error=true;
    $user = logIn($error);
    if(!$error)
    {
        $_SESSION['user'] = $user;

    }
}

else if(isset($_POST['submitLogout']))
{
    logOut();
}

$loggedIn = isset($_SESSION['user']);
$title = 'Login';
$page = $_GET['p'] ?? '';
?>










<?php

if (isset($_POST['submitLogin']))
{
    $error=true;
    $user = logIn($error);
    if(!$error)
    {
        $_SESSION['user'] = $user;
    }
}

else if(isset($_POST['submitLogout']))
{
    logOut();
}


?>
<form action="" method="post">
    <div>
        <input type="submit" name="loginButton" value="Login">
    </div>

    <div>
        <input type="submit" name="registerButton" value="Register">
    </div>
</form>