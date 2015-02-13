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

<script type="text/javascript">
//opening of javascript
// Function to validate an email address
function validEmailAddress() {
var email = document.forms["comments"]["email"].value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
if (1>atpos || 2+atpos>dotpos|| 2+dotpos>=email.length)
//checks the contect of the form
{
return false;
}
else
//if it passes then it is true
{
return true;
}
}
function validateForm() {
// Validate each form field that is required
var f = document.forms["comments"];
if (!validEmailAddress() || f["name"].value == "" || f["comment"].value == "") {
// Display an error message as the required fields are not filled out
document.getElementById("form-error").innerHTML = "Please ensure you fill out all of the required fields.";
return false;
}
return true;
}
</script>

<Title> Prism Games | FeedBack Form</title>

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

<br><br><br>

<h2>Thank you for shopping at Prism. We would love to hear from you</h2>

<p>Options with a * are mandatory</p>

<div id="form-error"></div>
<form class="c1" action="mailto:prismcompany1@gmail.com" id="comments" onsubmit="validateForm()" method="post" enctype="text/plain">
  
  <p>Name:*</p>
  <p><input type="text" name="name" value="" /></p>
  
  <p>E-mail:*</p>
  <p><input type="text" name="email" value="" /></p>
  
  <br>
  
  <p><strong>Web pages you liked the most:</strong>
</br>
  <select multiple>
    <option value="Homepage">Homepage</option>
	<option value="Homepage">Product Viewing Pages</option>
	<option value="Homepage">Individual Game Pages</option>
	<option value="Homepage">Latest Offers</option>
	<option value="Homepage">New Releases</option>
	<option value="Homepage">None</option>
  </select>  
  
  <br><br>
  
  <p><strong> How did you find the site:</strong><br>
  
    <br>  
  
    Luck<input name = "find" id="friend" type = "radio" value = "Luck"><br> 
    Search engine <input name = "find" id="search" type = "radio" value = "search engine" ><br>
    Magazine <input name = "find" id="magazine" type = "radio" value = "teacher"><br>
    Friend <input name = "find" id="friend" type = "radio" value = "friend"><br>
    Website<input name = "find" id="friend" type = "radio" value = "Website"><br>
	
	Other: <input type="text" name="other" value="" size="50"  />
	
	<br>
  
  
  <p>Comment:*</p>
  <textarea name="comments" rows="10" cols="50">
</textarea>   
  <p><input type="submit" value="Send" /> <input type="reset" value="Reset"/></p>
</form>




    
    
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