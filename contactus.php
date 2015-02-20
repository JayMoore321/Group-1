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


<Title> Prism Games | Contact Us</title>

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

<br><br><br>

<p>If you have any problems with our products or website, or just wish to contact us then please feel free.</p>

 <table class="contactus" border="0" align="center" "border-spacing: 10px;">
   <tr class="rowspace">
     <td>Address:</td>
	 <td>Prism Games <br>
	     Unity House <br>
         Telford Road <br>
         Northampton <br>
         NN2 9GT
	</tr> 

	<tr class="rowspace">
	  <td>Email Address:</td>
	  <td>prismgamescontact@gmail.com</td>
	</tr>
	
	<tr class="rowspace">
	  <td>Telephone Number:</td>
	  <td>01604 201 442</td>
	</tr> 
	
 
 </table>


</div>

<div class="footer">
<script> 
document.write(document.lastModified);
</script>
<li><a href="feedbackform.php">Feedback Form</a></li>
	<li><a href="contactus.php">Contact Us</a></li>
	<li><a href="">Product Guarantee </a></li>
</div>
        
    
</body>
</html>
