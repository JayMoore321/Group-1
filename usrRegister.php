
<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" /> <!-- CSS Code is the desgin used and implanted onto the page-->
<link href="navbar.css" rel="stylesheet" type="text/css" />
<link rel='shortcut icon' type='image/ico' href='favicon.ico' /><!--Page wrap uses comments to page sure the logo doesn't move.-->
<?php session_start();?><!-- php session start login in and starts using php-->
<Title> Prism Games | Game Review</title><!-- Title page display is tab-->
</head>
<body>
<!--Page wrap uses comments to page sure the logo doesn't move.-->
<div class="Pagewrap"><div class="Top-Bar"><div class="Logo"><!--Logo placed within the top [ar
--><img src="LOGO3.png" alt="lOGO" style="width:200px; height:150px"><h1 style="font-size: 14px; text-align: center;">PRISM GAMES</h1><!--
login script for users acesss specail privileges  --></div><div class="Hold"><div class="Login">
<?php include('login-script.php'); ?>
</div>
<div class="Search_Bar">
<script>
  (function() {
    var cx = '005131504979053412877:yw_sh9c9oda';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
	</div>
	<div class="Basket">


	
    </div>
</div>
<div id='nav'>
<ul>
   <li class='active'><a href='Homepage.php'><span>Home</span></a></li>
   <li><a href='ps4page.php'><span>Ps4</span></a></li>
   <li><a href='xboxonepage.php'><span>Xbox One</span></a></li>
   <li><a href='latestoffers.php'><span>Latest Offers</span></a></li>
   <li class='last'><a href='newreleases.php'><span>New Releases</span></a></li>
</ul>

</div></div>
<div class='main-content'>


<!-- Form register, where feilds that are rquired to be filled out are stated and and action before submitting the regsisteron-->
<h1>Register: </h1>
<table><tr><td>
<form id = "register" method="post" action= "usrRegister.php">
<p>Username: </p>
<input type="text" name="regUsername" required><br></td><td>
<p>Password: </p>
<input type="password" name="regPassword" required><br></td><td>
<p>Email Address</p>
<input type="email" name="regEmail" required><br></td><td>
<p>Delivery Address</p>
<input type="text" name="regDelAdd" required><br></td></tr><tr><td>
<p>Delivery Postcode</p>
<input type="text" name="regDelPost" required><br></td><td>
<p>Billing Address</p>
<input type="text" name="regBilAdd" required><br></td><td>
<p>Billing Postcode</p>
<input type="text" name="regBilPost" required><br></td><td>
    <button type=submit>Register</button></td></tr>
</form>
</table>
<!-- php session are used so the user's information is inserted and placed into the cutsomer table within the database uses a database connectio
so that code isn't repated on the same page-->
<?php
$Session_name = "user";
$Session_pass = "pass";
if (isset($_POST['regUsername'])){
include('DB_connection.php');
$sql= "SELECT username FROM CUSTOMER";
$result=$db ->query($sql);
if(!$result){
die('There was an error running the query' .$db->error);
}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(($row["username"]) == ($_POST["regUsername"])){
        
             ?> <h1>Sorry these details are already in use please try again.</h1><?php
            exit;
                                                }
                                         }

                                }

$randomNum = rand(1000, 9999);
$query = "INSERT INTO CUSTOMER  values('".$_POST['regUsername']."','".$_POST['regPassword']."','".$_POST["regEmail"]."','".$_POST['regDelAdd']."','".$_POST['regDelPost']."','".$_POST['regBilAdd']."','".$_POST['regBilPost']."','".$randomNum."','')";


if(!$db->query($query)){
                die('There was an error running the query ' . $db->error);
        }
unset($_SESSION);
session_destroy();
session_write_close();
session_start(); 
$_SESSION[$Session_name] = $_POST["regUsername"];
$_SESSION[$Session_pass] = $_POST["regPassword"]; 
header('Location: /~2027c_1/Homepage.php');
    

$db->close();
}
?>
<!-- php needs to have a die query incase something goes run.-->
 <!-- session uses the post method to implant the data, and uses randomnumber to create the id for the user.-->
  
<div class="footer">
<table> <!--table used to place links for the footer in a stairght line-->
</tr>
<center>
<td><li><a href="feedbackform.php">Feedback Form</a></li></td>
<td><li><a href="contactus.php">Contact Us</a></li></td>
<td><li><a href="productguarantee.php">Product Guarantee </a></li></td>
<td><li><a href="GameReview.php">Game Reviews </a></li></td>
<td><li><a href=""> Twitter </a></li></td>
<td><li><a href="">Facebook </a></li></td>
</center>
</tr>
</table>
</div>
</body>    
</div>
</html>
  
