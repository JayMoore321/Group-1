<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />


<style type="text/css">

div.footer
{
padding:1 em;
color:white;
background-color:teal;
clear:left;
font-size:70%;
text-align:center;
}

</style>

<?php session_start();?>

<Title> Prism Games | Destiny</title>

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
         <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://www.computing.northampton.ac.uk/~2027c_1/Cart.png" border="0" name="submit" alt="PayPal � The safer, easier way to pay online." wisth="50" height="50">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
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
<h1>Destiny Day One Edition</h1>

<img  style="float:left" src ="./gameimages/1.png" width="300px" height="450px">

<div  style="float:left">
</br>
<ul>
   	<li>Destiny is an online-only title and requires access to the PlayStation Network. </li>
	<li>From the creators of Halo and the publisher of Call of Duty, comes Destiny on PlayStation 4 </li>
	<li>As a Guardian of the last safe city on earth you are tasked with defending the City. </li>
	<li>Create your character, customise your weaponry and forge your own Destiny. </li>
   	<li>Play with friends in competitive and cooperative modes </li>

</ul>

</br>

<p><h3>Price: �27.99</h3></p>

<a href="1.php">
  <img src="basket.png" alt="lOGO" style="width:100px; height:30px">
</a> 


	</div>

 


    
</div>    
<div class="footer">
<script> 
document.write(document.lastModified);
</script>
<li><a href="feedbackform.php">Feedback Form</a></li>
	<li><a href="">Contact Us</a></li>
	<li><a href="">Product Guarantee </a></li>
</div>
        
    
</body>
</html>