<?php

session_start();
require_once './core/helper.php';
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
$title = isset($_GET['p']) ? $_GET['p'] : 'Home';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title><?=$title?></title>
</head>
<body>



<?php

$page = isset($_GET['p']) ? $_GET['p'] : '';
if($loggedIn)
{
    include (VIEWPATH.'site.php');
}
else
{
    switch($page)
    {
        case 'Page1':
        include (VIEWPATH.'header.php');
        include (VIEWPATH.'pages/page1.php');
        break;
    
        case 'Page2':
        include (VIEWPATH.'header.php');
        include (VIEWPATH.'pages/page2.php');
        break;
    
    
        case 'Page3':
        include (VIEWPATH.'header.php');
        include (VIEWPATH.'pages/page3.php');
        break;
    
        case 'Register':
        include (VIEWPATH.'header.php');
        include (VIEWPATH.'register.php');
        break;
        
        case 'Login':
        include (VIEWPATH.'header.php');
        include (VIEWPATH.'login.php');
        break;
    
        default:
        include (VIEWPATH.'header.php');
        break;
            
    }
}
?>


<?php if(isset($error) && $error !== false) : ?>
            <div class="error">
                <span onclick="{this.parentNode.parentNode.removeChild(this.parentNode);}">
                    x
                </span>
                <?=$error?>
            </div>
        <?php endif; ?>

</main>
    
<footer>
</footer>

</body>
</html>