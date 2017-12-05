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

        <form action="" method="post">
    
        <label for="uname">User Name</label>
        <input type="text" name="uname" id="uname" placeholder="Your Username" required
        value="<?=isset($error)&&isset($_POST['uname']) ? htmlspecialchars($_POST['uname']):''?>">
    


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