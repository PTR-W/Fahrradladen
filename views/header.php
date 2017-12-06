<header class="override">
    <nav>
        <ul>
            <li><a href="index.php?p=Home" >Home</a></li>
            <li><a href="index.php?p=Page1">seite 1</a></li>
            <li><a href="index.php?p=Page2">seite 2</a></li>
            <li><a href="index.php?p=Page3">seite 3</a></li>
        </ul>
                <form action="<?=$_SERVER['PHP_SELF'].'?p=Register';?>" method="post">
                <input type="submit" name="registerButton" value="Register">
                </form>
                <form action="<?=$_SERVER['PHP_SELF'].'?p=Login';?>" method="post">
                <input type="submit" name="loginButton" value="Login">
                </form>
    </nav>
</header>
<main>