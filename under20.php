<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" /> <!-- Style Sheets are linked --> 
<link href="navbar.css" rel="stylesheet" type="text/css" />


<link rel='shortcut icon' type='image/ico' href='favicon.ico' />



<?php session_start();?> <!-- The page sessions is being started --> 




<Title> Prism Games | Under £20</title> <!-- The page Title is being set --> 

</head>

<body>
<div class="Pagewrap"><div class="Top-Bar"><div class="Logo"><!--
--><img src="LOGO3.png" alt="lOGO" style="width:200px; height:150px"><h1 style="font-size: 14px; text-align: center;">PRISM GAMES</h1><!--
--></div><div class="Hold"><div class="Login">
<?php include('login-script.php'); ?> <!-- Using the login script --> 
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

        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://www.computing.northampton.ac.uk/~2027c_1/Cart.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online." wisth="50" height="50">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
    </div>
</div>
<div id='nav'>
<ul>
   <li class='active'><a href='Homepage.php'><span>Home</span></a></li> <!-- The page links for the nav bar --> 
   <li><a href='ps4page.php'><span>Ps4</span></a></li>
   <li><a href='xboxonepage.php'><span>Xbox One</span></a></li>
   <li><a href='latestoffers.php'><span>Latest Offers</span></a></li>
   <li class='last'><a href='newreleases.php'><span>New Releases</span></a></li>
</ul>
 
</div>
</div>
<div class="Main-Content">

<h1 style="color:darkgreen"><p><center>Games Under £20 </center></p></h1>
    
 <div style ="width: 1050px; margin:0 auto; height:1000px; border:0px solid black; overflow:scroll; overflow-y:hidden;"">
 <table class="ps4table" border="0" width="2000px" align="center" "border-spacing: 10px;">
  <tr width="200px">

    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/8.png" width="200px" height="300px"> </td>	
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/46.png" width="200px" height="300px"> </td>
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/58.png" width="200px" height="300px"> </td>
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/59.png" width="200px" height="300px"> </td>
<td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/30.png" width="200px" height="300px"> </td>

    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/33.png" width="200px" height="300px"> </td>



<div id='ps4page'>

</div>

<div id='ps4page'>

</div>
  <tr>


	<td style="padding:0 20px 20px 20px;">Minecraft<br>Price: £12.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=8">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Minecraft<br>Price: £14.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=46">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Lego Marvel superheros<br>Price: £17.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=58">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Battlefield 4<br>Price: £15.98 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=59">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Fifa 14<br>Price: £17.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=30">More Info</td></h3>

	<td style="padding:0 20px 20px 20px;">Tomb Raider<br>Price: £19.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=33">More Info</td></h3>
  </tr>
  <tr width="200px">
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/21.png" width="200px" height="300px"> </td>

	
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/64.png" width="200px" height="300px"> </td>
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/68.png" width="200px" height="300px"> </td>
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/71.png" width="200px" height="300px"> </td>
    <td style="padding:20px 20px 20px 20px;"><img src ="./gameimages/76.png" width="200px" height="300px"> </td>

  </tr>
  <tr>
    <td style="padding:0 20px 20px 20px;">Wolfenstein Occupied Edition<br>Price: £17.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=21">More Info</td></h3>

	

	<td style="padding:0 20px 20px 20px;">Alien Isolation Nostromo<br>Price: £19.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=64">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Fighter Within<br>Price: £10.11 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=68">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Wolfenstein Occupied Edition<br>Price: £19.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=71">More Info</td></h3>
	<td style="padding:0 20px 20px 20px;">Fifa 14<br>Price: £18.99 <br>  <h3><a  href="http://www.computing.northampton.ac.uk/~2027c_1/ProductPage.php?gameid=76">More Info</td></h3>


  </tr>
</table> 
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
