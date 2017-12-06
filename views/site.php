<header>
<nav>
    <ul>
        <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=user">Konto</a></li>
        <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=page4">userseite1</a></li>
        <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=page5">userseite2</a></li>
        <li><a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=page6">userseite3</a></li>
    </ul>
    <form action="<?=$_SERVER['PHP_SELF'].'?p=user';?>" method="post">
        <input type="submit" name="submitLogout" value="logout">
    </form>
</nav>
</header>

<main>

<?php
switch($page)
{
case 'user':

$user = user($_SESSION['user']);
include (VIEWPATH.'/pages/user.php');
break;

case 'page4':

include (VIEWPATH.'/pages/page4.php');
break;

case 'page5':

include (VIEWPATH.'/pages/page5.php');
break;


case 'page6':

include (VIEWPATH.'/pages/page6.php');
break;

default:
echo 'Error 404';
break;
    
}


?>

</main>

<footer>

</footer>