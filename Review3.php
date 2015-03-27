<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" /> <!-- CSS Code is the desgin used and implanted onto the page-->
<link href="navbar.css" rel="stylesheet" type="text/css" />
<link rel='shortcut icon' type='image/ico' href='favicon.ico' /><!--Page wrap uses comments to page sure the logo doesn't move.-->
<?php session_start();?><!-- php session start login in and starts using php-->
<Title> Prism Games | Review</title>
</head>
<body>
<!--Page wrap uses comments to page sure the logo doesn't move.-->
<div class="Pagewrap"><div class="Top-Bar"><div class="Logo"><!--Logo placed within the top [ar
--><img src="LOGO3.png" alt="lOGO" style="width:200px; height:150px"><h1 style="font-size: 14px; text-align: center;">PRISM GAMES</h1><!--
login script for users acesss specail privileges  --></div><div class="Hold"><div class="Login">
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
	<div class="Basket"><!--Basket uses paypal and links them to the basket so the user is able to buy prodcuts-->	
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="http://www.computing.northampton.ac.uk/~2027c_1/Cart.png" border="0" name="submit" alt="PayPal ñ The safer, easier way to pay online." wisth="50" height="50">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
</div></div>
<div id='nav'></div> 
<!--Navigation links follows the CSS desgin uses li-->
<ul>
   <li class='active'><a href='Homepage.php'><span>Home</span></a></li>
   <li><a href='ps4page.php'><span>Ps4</span></a></li>
   <li><a href='xboxonepage.php'><span>Xbox One</span></a></li>
   <li><a href='latestoffers.php'><span>Latest Offers</span></a></li>
   <li class='last'><a href='newreleases.php'><span>New Releases</span></a></li>
</ul>
</div></div>
<div class="Main-Content">
<!--table used to display images within a table so that it follows the desgin and also links moves with a scrollbar-->
</br>


<img  style="float:left" src ="./gameimages/4.png" width="320px" height="460px">



<iframe width="700" height="480" align="right" src="https://www.youtube.com/embed/TnTYVT6lwBc" frameborder="0" allowfullscreen></iframe></p>

<!--Iframe used for the video-->

<p align="right center" style="
  
    he: 400px;
    display: inline-block;
  
">

Ardent fans of the Fifa football games know two things to be true whenever the latest instalment arrives. It will be mostly the same game as before, and it will also be the best football simulation ever. EA Sports, much like Apple with its iDevices, has found a winning formula, and it is reluctant to do more than drip feed us tiny changes every year.

That said, it has long been believed that this year’s instalment would be the big one. After all, developers have had almost a year since the launch of the Xbox One and Playstation 4 last November to really get to know the possibilities and limitations of these machines.

Well, the graphical improvements are by no means dramatic, but they are noticeable. Faces are more expressive, and EA claims that there are 600 emotional reactions that could potentially be seen during the game; players from opposing teams push, shove and bark at each other after having engaged in a series of aggressive physical battles over the course of the match. Strikers look pleased with themselves after scoring a belter and assistant referees … twitch their noses when making an offside call. Unnecessary perhaps, but it’s a tiny detail that adds yet another layer of realism to the most realistic football sim on the planet.

Indeed, EA Sports is all about the small things this year. Blades of grass (and, if it’s raining, water) go flying into the air in slow motion when the ball is struck during replays, the pitch develops physical signs of wear and tear over the course of the match, shirts are visibly pulled by defenders chasing a zippy winger and the PA system at Selhurst Park warns fans in the stadium that the Northern line isn’t running (hats off to EA, they’ve clearly done their research on that one).

The game now has disallowed goals, rather than laser-accurate robotic linesmen that will instantly stop play for offside the moment the ball goes anywhere near an offending player. That rollercoaster of jubilation followed by disappointment when your team is stripped of a winning goal in the dying moments of injury time is, to borrow a phrase from EA Sports, “in the game”.

Also in the game are fully licensed stadiums for every team in the Premiership. As well as looking the part, real fan chants have been recorded, and crowds have been given custom behaviours based on the team. You probably won’t make it through a match at Anfield without a chorus of “You’ll Never Walk Alone”, and commentators notice and remark on Manchester City’s supporters doing the Poznan.

Nothing has been left un-animated in Fifa 15. Substitutes celebrate from the bench when their teams score – sometimes the camera even cuts to a close up of a major player on the sidelines, while there are 10-man goal celebrations on the pitch. Ball boys supply players with another ball when one has gone out of bounds, and corner flags bend when pushed against.

The player models have been updated, and not just in the hairstyle department. The game’s digital sportsmen have generally been given more muscular body shapes, with longer arms and shoulders slightly reminiscent of 1980s Arnold Schwarzenegger. It’s perhaps a bit extreme for all but the most ripped players, but they certainly look more like athletes than in previous games.

For all the graphical improvements, the odd glitch does remain. Far less often will you see a player’s arm pass through the body of his team mate during a goal celebration, but they do occur on the rare occasion. Gone, as far as one can see from some 12+ hours of gameplay so far, are glitches involving levitating players or getting knocked over by invisible team mates in the post-goal festivities


something else here
<p><h1> Graphics rating </h1></p>
<p><img  style="" src ="./reviewimages/One.png" width="400px" height="150px"></p>

<p><h1> Gaming rating </h1></p>
<p><img  style="" src ="./reviewimages/Halfff.png" width="400px" height="150px"></p>
 
<p><h1> Overall rating </h1></p>
<p><img  style="" src ="./reviewimages/2half.png" width="400px" height="150px"></p>


</br>
</br>

</div>

   
<div class="footer"><!--table used to place links for the footer in a stairght line-->
<table>
<tr>
<center>
<td><ul><a href="feedbackform.php">Feedback Form</a></ul></td>

	<td><ul><a href="contactus.php">Contact Us</a></ul></td>
	<td><ul><a href="productguarantee.php">Product Guarantee </a></ul></td>
	<td><ul><a href="GameReview.php">Game Reviews </a></ul></td>
	<td><ul><a href="https://twitter.com/Prism_Games_"> Twitter </a></ul></td>
	<td><ul><a href="">Facebook </a></ul></td>

</center>
</tr>
</table>
	
</div>
        

 </div>   
</body>
</html>
