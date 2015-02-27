<html>
<head>
<link href="CSSDesign1.css" rel="stylesheet" type="text/css" />
<link href="navbar.css" rel="stylesheet" type="text/css" />
<?php session_start();?>

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
<?php 
$gameid = $_GET["gameid"];
    include('DB_connection.php');

$sql= "select * from PRODUCTS WHERE gameid =$gameid";
$result=$db ->query($sql);
if(!$result){
die('There was an error running the query' .$db->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row["gamename"];
        $console = $row["console"];
        $genre = $row["genre"];
        $price = $row["price"];
        $description = $row["description"];
                                                }
                                         }
?>
</br>
<h1><?php echo($name); ?></h1>

<img  style="float:left" src ="./gameimages/<?php echo($gameid)?>.png" width="300px" height="450px">

<div  style="float:left">
</br>
    <?php echo($description); ?>
<!--
<ul>
   	<li>Destiny is an online-only title and requires access to the PlayStation Network. </li>
	<li>From the creators of Halo and the publisher of Call of Duty, comes Destiny on PlayStation 4 </li>
	<li>As a Guardian of the last safe city on earth you are tasked with defending the City. </li>
	<li>Create your character, customise your weaponry and forge your own Destiny. </li>
   	<li>Play with friends in competitive and cooperative modes </li>

</ul>
-->
</br>

<p><h3>Price: £<?php echo($price); ?></h3></p>

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
        
 </div>   
</body>
</html>