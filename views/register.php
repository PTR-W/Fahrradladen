<?php
require_once './core/helper.php';

if(isset($error)): ?>
    <div class=error>
    <?php echo ($error); ?>
    </div>
<?php endif; ?>

<div class="login-wrapper">
    <div class="login-modal">
        <div class="img-shadow"></div>
        <div class="img"></div>
        <div class="title">REGISTER</div>

        <form action="<?=$_SERVER['SCRIPT_NAME']?>?p=Register" method="post">
    
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname" placeholder="Your Username" required
        value="<?=isset($error)&&isset($_POST['uname']) ? htmlspecialchars($_POST['uname']):''?>">

        <label for="fname">Firstname</label>
        <input type="text" name="fname" id="fname" placeholder="Firstname" required
        value="<?=isset($error)&&isset($_POST['fname']) ? htmlspecialchars($_POST['fname']):''?>">

        <label for="lname">Lastname</label>
        <input type="text" name="lname" id="lname" placeholder="Your Lastname" required
        value="<?=isset($error)&&isset($_POST['lname']) ? htmlspecialchars($_POST['lname']):''?>">
    


        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd" placeholder="Your Password" required>
    


        <label for="pwd2">Password again</label>
        <input type="password" name="pwd2" id="pwd2" placeholder="Your Password again" required>
    


        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Your Email adress" required
        value="<?=isset($error)&&isset($_POST['email']) ? htmlspecialchars($_POST['email']):''?>">
    
        <div>
        <input type="submit" name="submitRegister" value="Register">
        </div>
            
            <div class="clear"></div>
        </form>
    </div>
</div>