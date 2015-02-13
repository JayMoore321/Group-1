<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<?php session_start(); ?>
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
</div><div class="Basket"></div></div>

<div id='nav'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li><a href='#'><span>Ps4</span></a></li>
   <li><a href='#'><span>Xbox One</span></a></li>
   <li><a href='#'><span>Latest Offers</span></a></li>
   <li class='last'><a href='#'><span>New Releases</span></a></li>
</ul>

    
</div></div>
<div class="Main-Content">
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
  </div>
  <div class="footer">    
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

</div>
</html>
