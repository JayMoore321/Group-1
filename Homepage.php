<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" media="only screen and (max-width: 400px)" href="mobile.css" /> 
<link rel="stylesheet" media="only screen and (min-width: 401px)" href="CSSDesign1.css" /> 
<link rel='shortcut icon' type='image/ico' href='favicon.ico' /><!--Page wrap uses comments to page sure the logo doesn't move.-->
<?php session_start();?><!-- php session start login in and starts using php-->

<script type="text/javascript"><!--Slide show uses arrays to display images-->


var image = new Array()
image[0] = new Image()
image[0].src = "4.jpg"
image[1] = new Image()
image[1].src = "6.jpg"
image[2] = new Image()
image[2].src = "3.jpg"
image[3] = new Image()
image[3].src = "5.jpg"


</script>
<Title> Prism Games | Homepage</title>
</head>
<body>
<!--Page wrap uses comments to page sure the logo doesn't move.-->
<div class="Pagewrap"><div class="Top-Bar"><div class="Logo"><!--Logo placed within the top bar
--><img src="LOGO3.png" alt="lOGO" style="width:200px; height:150px"><h1 style="font-size: 14px; text-align: center;">PRISM GAMES</h1><!--
login script for users acesss specail privileges  --></div><div class="Hold"><div class="Login">
<?php include('login-script.php'); ?>
</div>
<div class="Search_Bar"> <!-- This is the search bar searches through database to find the game-->
<?php include("index.php");?>	</div>
	<div class="Basket"><!--Basket uses paypal and links them to the basket so the user is able to buy prodcuts-->	
	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://www.computing.northampton.ac.uk/~2027c_1/Cart.png" border="0" name="submit" alt="PayPal ñ The safer, easier way to pay online." wisth="50" height="50">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
    </div>
</div> 
<div id='nav'><!--Navigation links follows the CSS desgin uses li-->
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
<div class="slideshow">
<img src="slideshow1.jpg" id="slide" width="1010" height="360" solid border="20" style= "border-color:#586CD2"; />
</div>
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
<div class="promo">
<div class="productBox">
 <table style="background:#5AD258; border="0" width="280px" align="center" border-spacing: 10px; display: inline-block; ">


<tr>  
<tr width="200px">
    <td align="center"><h2> 2 for 1 on Ps4 Games</h2> </td>


  </tr>

<tr width="200px">
    <td align="center">  <img src ="./gameimages/1.png" width="200px" height="300px"> </td>

  </tr>
  <tr>
    <td align="center"><FORM METHOD="LINK" ACTION="BOGOFPS4.php">
<INPUT TYPE="submit" VALUE="Buy Here">
</FORM></td>		

  </tr>


  
</table> 
 
 
</div>  

<div class="productBox">
 <table style="background:#5AD258; border="0" width="280px" align="center" border-spacing: 10px;">


<tr>  
<tr width="200px">
    <td align="center"><h2>Games Under £20</h2> </td>


  </tr>

<tr width="200px">
    <td align="center">  <img src ="./gameimages/46.png" width="200px" height="300px"> </td>

  </tr>
  <tr>
    <td align="center"><FORM METHOD="LINK" ACTION="under20.php">
<INPUT TYPE="submit" VALUE="Buy Here">
</FORM></td>		

  </tr>


  
</table> 
 
 
</div>  


<div class="productBox">
 <table style="background:#5AD258; border="0" width="282px" align="center" border-spacing: 10px;">

<tr>  
<tr width="200px">
    <td align="center"><h2>Clearance Sale</h2> </td>


  </tr>

<tr width="200px">
    <td align="center">  <img src ="./gameimages/4.png" width="200px" height="300px"></td>

  </tr>
  <tr>
    <td align="center"><FORM METHOD="LINK" ACTION="clearance.php">
<INPUT TYPE="submit" VALUE="Buy Here">
</FORM></td>		

  </tr>


  
</table> 
 
 

</div>  
</div>
    
</div>    
<div class="footer"><!--table used to place links for the footer in a stairght line-->
<ul>
<li><a href="feedbackform.php">Feedback Form</a></li>
<li><a href="contactus.php">Contact Us</a></li>
<li><a href="productguarantee.php">Product Guarantee </a></li>
<li><a href="GameReview.php">Game Reviews </a></li>
<li><a href="https://www.twitter.com/Prism_Games_"> Twitter </a></li>
<li><a href="https://www.facebook.com/PrismGames?fref=ts">Facebook </a></li>
</ul>
</center>
</tr>
</table>
</div>

</div>
</body>    
</html>
