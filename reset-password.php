<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<?php session_start();?>
<script type="text/javascript">
var image = new Array()
image[0] = new Image()
image[0].src = "slideshow1.jpg"
image[1] = new Image()
image[1].src = "slideshow2.jpg"
image[2] = new Image()
image[2].src = "slideshow3.jpg"
image[3] = new Image()
image[3].src = "slideshow4.jpg"

</script>
<Title> Prism Games | Homepage</title>
</head>
<body>
<div class="Pagewrap"><div class="Top-Bar"><div class="Logo"><!--
--><img src="LOGO3.png" alt="lOGO" style="width:200px; height:150px"><h1 style="font-size: 14px; text-align: center;">PRISM GAMES</h1><!--
--></div><div class="Hold"><div class="Login">
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


	
    </div></div>
<div id='nav'>
<ul>
   <li class='active'><a href='Homepage.php'><span>Home</span></a></li>
   <li><a href='ps4page.php'><span>Ps4</span></a></li>
   <li><a href='xboxonepage.php'><span>Xbox One</span></a></li>
   <li><a href='latestoffers.php'><span>Latest Offers</span></a></li>
   <li class='last'><a href='newreleases.php'><span>New Releases</span></a></li>
</ul>

</div>
</div>
<div class="Main-Content">


<?php
//$email = $_GET['emailadd'];
//    echo $email;


?>
<form name="resetPass" id ="resetPass"  method="post" action= "reset-password.php">
<h3>Please enter the code that you have been given:</h3> 
<input type="text" name="code" id="code" /> <!--//echo rand(5, 15);-->
<input type="text" name="emailhold" id="emailhold" readonly="true">  
<button type=submit id="send">Send</button>
</form>     

    
<script language="javascript">
//takes the inforamtion from the URL and splits it inot name and value then saves the value in the textbox textBoxHolder
    var Search = document.location.search.substring(1); //reads subtring of the url after ?
   var Split = Search.split("&"); //splits the url at & which is after every parameter sent.
   var params = new Array();
   for ( var i=0; i< Split.length; i++){ //run the length of Split
        var Data = Split[i].split("="); // split the name and value at =
        var name  = Data[0]; // put name in Data placeholder 0
        var value = Data[1]; // put vaule in Data placeholder 1
        params[ name ] = unescape( value ); // decodes the value of user input.
        //params["title"] would be used with the name to find the value
   }
    document.resetPass.emailhold.value=params["emailadd"]; //sets title value to textbox textBoxHolder
    document.getElementById("emailhold").style.visibility="hidden";
   </script>     
    
<?php
if (isset($_POST['code'])){
include('DB_connection.php');
    $email = $_POST['emailhold'];
    $code = $_POST['code'];
//echo $_POST['code'];
//echo $_POST['emailhold'];
$sql= "SELECT * FROM CUSTOMER WHERE emailaddress='$email'";
$result=$db ->query($sql);
if(!$result){
die('There was an error running the query' .$db->error);
}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(($row["email_number"]) == ($code)){
            setcookie("email", $email, time() + (86400), "/");
            
            ?>
    <script>
document.getElementById("code").style.visibility="hidden";
document.getElementById("send").style.visibility="hidden";
</script>
<form name="newPass" id ="newPass"  method="post" action= "">
<h3>Please enter your new password </h3>
<input type="text" name="pass1" />
<h3>Please re-enter your new password </h3>
<input type="text" name="pass2" />  
<button type=submit>Send</button>
</form>     <?php
        }
        else{
         echo "Code doesnt match please request a new code.";   
        }
    
    }}}

if (isset($_POST['pass1'])){ 
   $p1 = $_POST['pass1'];
   $p2 = $_POST['pass2'];
if (($p1) == ($p2)){
    include('DB_connection.php');
$cookieEmail = $_COOKIE["email"];
    $sql = "UPDATE CUSTOMER SET password='$p1' WHERE emailaddress='$cookieEmail'";
   

if ($db->query($sql) === TRUE) {
    echo "Password updated successfully";
}
    else {
    echo "Error updating Password: " . $conn->error;
}
}
else {
 echo "Passwords don't match, Please try again";    
}
}


    
    ?>
    
</div>
    
    
</div>  

       
<div class="footer"><!--footer div started-->
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
