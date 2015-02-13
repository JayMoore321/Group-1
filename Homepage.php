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
<div class="slideshow">
<img src="slideshow1.jpg" id="slide" width="1050" height="400" />
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
<div style ="width: 280px; margin:10 auto; margin-right:10; height:400px; border:30px solid purple; border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px; display: inline-block;" >
 <table style="background:green; border="0" width="280px" align="center" border-spacing: 10px; display: inline-block; ">


<tr>  
<tr width="200px">
    <td align="center"><h2> Latest PS4 Releases</h2> </td>


  </tr>

<tr width="200px">
    <td align="center">  <img src ="./gameimages/001.png" width="200px" height="300px"> </td>

  </tr>
  <tr>
    <td align="center"><FORM METHOD="LINK" ACTION="ps4page.php">
<INPUT TYPE="submit" VALUE="Buy Here">
</FORM></td>		

  </tr>


  
</table> 
 
 
</div>  

<div style ="width: 280px; margin:10 auto; margin-right:10; height:400px; border:30px solid purple; border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px; display: inline-block;" >
 <table style="background:green; border="0" width="280px" align="center" border-spacing: 10px;">


<tr>  
<tr width="200px">
    <td align="center"><h2> Latest Xbox Releases</h2> </td>


  </tr>

<tr width="200px">
    <td align="center">  <img src ="./gameimages/061.png" width="200px" height="300px"> </td>

  </tr>
  <tr>
    <td align="center"><FORM METHOD="LINK" ACTION="xboxonepage.php">
<INPUT TYPE="submit" VALUE="Buy Here">
</FORM></td>		

  </tr>


  
</table> 
 
 
</div>  


<div style ="width: 280px; margin:10 auto; height:400px; border:30px solid purple; border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px; display: inline-block;" >
 <table style="background:green; border="0" width="280px" align="center" border-spacing: 10px;">


<tr>  
<tr width="200px">
    <td align="center"><h2> Latest Offers</h2> </td>


  </tr>

<tr width="200px">
    <td align="center">  <img src ="./gameimages/078.png" width="200px" height="300px"></td>

  </tr>
  <tr>
    <td align="center"><FORM METHOD="LINK" ACTION="Homepage.php">
<INPUT TYPE="submit" VALUE="Buy Here">
</FORM></td>		

  </tr>


  
</table> 
 
 

</div>  
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
        
 </div>   
</body>
</html>