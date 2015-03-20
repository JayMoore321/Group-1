<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />


<?php session_start();?>

<Title> Prism Games | Gta V</title>

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

 
</div>
</div>
<div class="Main-Content">
</br>
<h1>Gta V</h1>

<img  style="float:left" src ="./gameimages/2.png" width="300px" height="450px">

<div  style="float:left">
</br>
<ul>
   	<li>Gta V </li>
	

</ul>

</br>

<p><h3>Price: £42.99</h3></p>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="U4UHUH94DZRJN">
<input type="image" src="http://www.computing.northampton.ac.uk/~2027c_1/basket.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>



	</div>

 
<div class="footer">


<table>
</tr>
<center>
<td><li><a href="feedbackform.php">Feedback Form</a></li></td>

	<td><li><a href="contactus.php">Contact Us</a></li></td>
	<td><li><a href="">Product Guarantee </a></li></td>
	<td><li><a href="https://twitter.com/Prism_Games_"> Twitter </a></li></td>
	<td><li><a href="">Facebook </a></li></td>
	<script> 
document.write(document.lastModified);
</script>
</center>
</tr>
</table>
	
</div>
        
    
</body>
</html>