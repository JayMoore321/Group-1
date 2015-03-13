<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<?php session_start();?>
<script type="text/javascript">

var image = new Array()
image[0] = new Image()
image[0].src = "3.jpg"
image[1] = new Image()
image[1].src = "4.jpg"
image[2] = new Image()
image[2].src = "5.jpg"
image[3] = new Image()
image[3].src = "6.jpg"

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
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIG1QYJKoZIhvcNAQcEoIIGxjCCBsICAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYC3jjQhaGU3b83dmmcbLQPDYnV8u24jwJ2lOAEXGOGCpQSTIbmtr1scrnC3Ahj7qFYfSyQEse/ZGAHOImb9+2U9NaoJUsDp7KIL+R2JbJL5VGsFAj4lrh/gkXRw59TtokEwFdwWhYAvkpTzm+TuDPCf74lCIbgDHKxk07rI9cJydzELMAkGBSsOAwIaBQAwUwYJKoZIhvcNAQcBMBQGCCqGSIb3DQMHBAg/yIDp6UPu14AwrpmXsneMxaj2Crjoc3WlrRDKFgnDuuqHNpIxuRT0IAiBNyOfo49g7z2DrQT8lDkQoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTUwMjE5MTczMDA0WjAjBgkqhkiG9w0BCQQxFgQUV/n8SEbkbxc11B3xD5In7Za6NmcwDQYJKoZIhvcNAQEBBQAEgYCFdMdo9TTEjN1qc45PDzH7BHckskrHNwL5byIS4dm9w5DmNQIdYY/v9/BluziMlthhzDPWbn7TGGDr4BM4ykYAUQMwMwiTv3222EH+xLwyFkM0F9ft6078gZUjfsYfoKmybmV1A8AXbIkCFR1GSn77MlF2DpGNTS8WrjEORhXmuw==-----END PKCS7-----
">
<input type="image" src="http://www.computing.northampton.ac.uk/~2027c_1/Cart.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online." wisth="50" height="50">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

	
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
<table>
</tr>
<center>
<td><ui><a href="feedbackform.php">Feedback Form</a></ul></td>

	<td><ul><a href="contactus.php">Contact Us</a></ul></td>
	<td><ul><a href="productguarantee.php">Product Guarantee </a></ul></td>
	<td><ul><a href="GameReview.php">Game Reviews </a></ul></td>
	<td><ul><a href="https://www.twitter.com/Prism_Games_"> Twitter </a></ul></td>
	<td><ul><a href="https://www.facebook.com/PrismGames?fref=ts">Facebook </a></ul></td>
	<script> 
document.write(document.lastModified);
</script>
</center>
</tr>
</table>
</div>
	
</div>
        

 </div>   
</body>
</html>
