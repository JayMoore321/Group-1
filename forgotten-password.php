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
<script type="text/javascript">


var show=0

function slider(){
 document.getElementById('slide').src = image[show].src
 if (show<3)
  show++
 else
  show=0

 setTimeout("slider()",5000)
}

slider()
</script>
<div class="forgotten">
<h1>Forgotten your password? <br>Please enter your email address below.</h1>    

<form id ="checkDForEmail" method="post" action= "forgotten-password.php">
Email: 
<input type="email" name="foremail" /> <!--//echo rand(5, 15);-->
<button type=submit>Send</button>
</form>    
 <?php
$Session_name = "user";
$Session_pass = "pass";
if (isset($_POST['foremail'])){
include('DB_connection.php');
$sql= "SELECT emailaddress, email_number FROM CUSTOMER";
$result=$db ->query($sql);
if(!$result){
die('There was an error running the query' .$db->error);
}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(($row["emailaddress"]) == ($_POST["foremail"])){
            $email = $row["emailaddress"];
            $code = $row["email_number"];
        ?>
    <h1>Email address is vaild please press send</h1>
    
    <form enctype="text/plain" method="post" action="mailto:<?php echo $email ?>?subject=Reset%20Email%20Prism%20Games&body=Please%20follow%20the%20link%20below%20and%20enter%20your%20unique%20code%0D%0A
code:%20<?php echo $code ?> %0D%0A
http://www.computing.northampton.ac.uk/~2027c_1/reset-password.php?emailadd=<?php echo $email ?>"> 
    
    <button type=submit>Send</button>
    </form>
<?php
            
        
        
        }
                                         }

                                }
     else{ ?> <h1>email address not found</h1><?php
            exit;
    }
}
    ?>
<!--<form enctype="text/plain" method="post" action="mailto:" -->
    
    


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
