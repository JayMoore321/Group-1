<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="only screen and (max-width: 400px)" href="mobile.css" />
<link rel="stylesheet" media="only screen and (min-width: 401px)" href="CSSDesign1.css" /><!-- CSS Code is the desgin used and implanted onto the page-->
<link rel='shortcut icon' type='image/ico' href='favicon.ico' /><!--Page wrap uses comments to page sure the logo doesn't move.-->
<?php session_start();?><!-- php session start login in and starts using php-->

<Title> Prism Games | Game Review</title>
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
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIG1QYJKoZIhvcNAQcEoIIGxjCCBsICAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYC3jjQhaGU3b83dmmcbLQPDYnV8u24jwJ2lOAEXGOGCpQSTIbmtr1scrnC3Ahj7qFYfSyQEse/ZGAHOImb9+2U9NaoJUsDp7KIL+R2JbJL5VGsFAj4lrh/gkXRw59TtokEwFdwWhYAvkpTzm+TuDPCf74lCIbgDHKxk07rI9cJydzELMAkGBSsOAwIaBQAwUwYJKoZIhvcNAQcBMBQGCCqGSIb3DQMHBAg/yIDp6UPu14AwrpmXsneMxaj2Crjoc3WlrRDKFgnDuuqHNpIxuRT0IAiBNyOfo49g7z2DrQT8lDkQoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTUwMjE5MTczMDA0WjAjBgkqhkiG9w0BCQQxFgQUV/n8SEbkbxc11B3xD5In7Za6NmcwDQYJKoZIhvcNAQEBBQAEgYCFdMdo9TTEjN1qc45PDzH7BHckskrHNwL5byIS4dm9w5DmNQIdYY/v9/BluziMlthhzDPWbn7TGGDr4BM4ykYAUQMwMwiTv3222EH+xLwyFkM0F9ft6078gZUjfsYfoKmybmV1A8AXbIkCFR1GSn77MlF2DpGNTS8WrjEORhXmuw==-----END PKCS7-----
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
 
</div> </div>
	
<div class="Main-Content"><!--table used to display images within a table so that it follows the desgin and also links moves with a scrollbar-->
<h1 style="color:darkgreen"><p><center>Games Review's </center></p></h1> 
<table class="reviewtable" border="0" width="200px" align="center" "border-spacing: 10px;">
<tr width="200px">
  
<td style="padding:80px 20px 20px 20px;"><img src ="./gameimages/19.png" width="300px" height="400px"> </td>	
<td style="padding:80px 20px 20px 20px;"><img src ="./gameimages/51.png" width="300px" height="400px"> </td>	

<tr>
<td style="padding:0 20px 20px 20px;"><i>The Last of Us</i><br><b>PS4 Exclusive</b><br>  <h3><a  href="Review1.php">Review</td></h3>
<td style="padding:0 20px 20px 20px;"><i>Halo Master Chief Collection</i> <br><b>XBOX ONE Exclusive</b><br>  <h3><a  href="Review2.php">Review</td></h3>
</tr>
  
<tr width="200px">
  
<td style="padding:80px 20px 20px 20px;"><img src ="./gameimages/4.png" width="300px" height="400px"> </td>	
<td style="padding:80px 20px 20px 20px;"><img src ="./gameimages/41.png" width="300px" height="400px"> </td>	 
</tr>
<tr>
  <td style="padding:0 20px 20px 20px;"><i>FIFA 15</i><br><b>PS4 & XBOX ONE</b><br>  <h3><a  href="Review3.php">Review</td></h3>
<td style="padding:0 20px 20px 20px;"><i>GTA:V Remastered</i> <br><b>PS4 & XBOX ONE</b><br>  <h3><a  href="Review4.php">Review</td></h3>  
    
</tr>    
  
  
</table> 

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
