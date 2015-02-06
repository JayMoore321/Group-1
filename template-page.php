<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />

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

<Title> Prism Games</title>

</head>

<body>
<div class="Pagewrap">
<div class="Top-Bar">
<div class="Logo">
<img src="LOGO2.jpg.png" alt="lOGO" style="width:200px; height:150px">
</div>
<div class="Hold">
<div class="Login">
<?php include('login-script.php'); ?>
</div>
<div class="Search_Bar">
</div>
<div class="Basket">
    
</div>
</div>
<div class="Nav_Bar">

<div id='nav'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li><a href='#'><span>Ps4</span></a></li>
   <li><a href='#'><span>Xbox One</span></a></li>
   <li><a href='#'><span>Latest Offers</span></a></li>
   <li class='last'><a href='#'><span>New Releases</span></a></li>
</ul>

    
</div>
<div>
<img src="slideshow1.jpg" id="slide" width="1050" height="400" />

<script type="text/javascript">


var show=0

function slider(){
 document.getElementById('slide').src = image[show].src
 if (show<3)
  show++
 else
  show=0

 setTimeout("slider()",3000)
}

slider()
</script>    
</div>   
    
  </body>     
<footer>
<nav>
<ul>
<li><a href="">Feedback Form</a></li>
<li><a href="">Contact Us</a></li>
<li><a href="">product guarantee </a></li>
</ul>
</nav>
    
    
    </footer>    


</div>
</html>
