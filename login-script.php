<?php
$cookie_name = "user";
$cookie_pass = "pass";
$cookie_level = "lev";
$cookie_value = "";
$cookie_titleForRegister = "titleForRegister";
$cookie3_locationForRegister = "locationForRegister";

if ((isset($_COOKIE[$cookie_name]) && isset($_COOKIE[$cookie_pass]) && isset($_COOKIE[$cookie_pass])) == $cookie_value){
?>
<form action="login.php" method="post" style="display: inline-block;">
Username: 
<input type="text" name="username" />
Password: 
<input type="password" name="password" />
Login: 
<button type="submit" name="login" value="login" />Login</button>

</form>
<form action="register.php" method="post" style="display: inline-block;"> 
<button type="submit" name="register" value="registers" />Sign Up!</button>
</form>
    
<?php    
    }
else {
    echo "Hello: " . $_COOKIE[$cookie_name];
}

?>