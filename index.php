<?php

require_once './core/helper.php';
require_once './core/config.php'; 
require_once './core/functions.php'; 

$loggedIn = isset($_SESSION['user']);

session_save_path(__DIR__.'/data');
session_start();

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
$mode='';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Home</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php?p=page1">seite 1</a></li>
            <li><a href="index.php?p=page2">seite 2</a></li>
            <li><a href="index.php?p=page3">seite 3</a></li>
        </ul>
                <form action="" method="post">
                <input type="submit" name="loginButton" value="login">
                <input type="submit" name="registerButton" value="register">
                </form>
    </nav>
</header>

<main>

<?php

$page = isset($_GET['p']) ? $_GET['p'] : '';

switch($page)
{
    case 'page1':
    
    include (VIEWPATH.'pages/page1.php');
    break;

    case 'page2':
    
    include (VIEWPATH.'pages/page2.php');
    break;


    case 'page3':
    
    include (VIEWPATH.'pages/page3.php');
    break;

    default:
    break;
        
}


if(isset($_POST['loginButton']))
{   
    include (VIEWPATH.'login.php');
}

else if(isset($_POST['registerButton']))
{
    include (VIEWPATH.'register.php');
}
else;

?>

</main>

<footer>
</footer>

</body>
</html>