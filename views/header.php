<header class="override">
    <nav>
        <ul>
            <li><a href="index.php?p=home" >Home</a></li>
            <li><a href="index.php?p=page1">About Us</a></li>
            <li><a href="index.php?p=page2">How It Works</a></li>
        </ul>
                <form action="<?=$_SERVER['PHP_SELF'].'?p=register';?>" method="post">
                <input type="submit" name="registerButton" value="Register">
                </form>
                <form action="<?=$_SERVER['PHP_SELF'].'?p=login';?>" method="post">
                <input type="submit" name="loginButton" value="Login">
                </form>
    </nav>
</header>
<main>