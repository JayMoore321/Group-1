<?php
$Session_name = "user";
$Session_pass = "pass";
$Session_value = "";

if ((isset($_SESSION[$Session_name]) && isset($_SESSION[$Session_name])) == ($Session_value)){
?>
<form action="login.php" method="post" style="display: inline-block;">
Username: 
<input type="text" name="username" />
Password: 
<input type="password" name="password" />
Login: 
<button type="submit" name="login" value="login" />Login</button>

</form>
<form action="usrRegister.php" method="post" style="display: inline-block;"> 
<button type="submit" name="register" value="registers" />Sign Up!</button>
</form>
<a href="forgotten-password.php" style="display: inline-block; margin-left: 310px; margin-top: -20px;"> 
Forgotten Password?</a>
    
<?php    
    }
else {
    echo "Hello: ".$_SESSION[$Session_name];
    ?>
<form action="Logout_script.php" method="post" style="display: inline-block;"> 
<button type="submit" name="logout" value="logout" />Logout</button>
</form>
<?php
}

?>