<?php
DEFINE ('DB_HOST', '194.81.104.22');
	DEFINE ('DB_USER', 'team1');
	DEFINE ('DB_PASSWORD', 'group1');
	DEFINE ('DB_NAME', 'db_team1');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .
	mysqli_connect_error());
	$output = '';
//collect
if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query = mysqli_query($db,"SELECT * FROM PRODUCTS WHERE gamename = '$searchq'") or die("Could not search");
	$count = mysqli_num_rows($query);
	if($count == 0) {
		$output = 'There were no search results';}
		
		else{
	while($row = mysqli_fetch_array($query)) {
	  $fname = $row['gamename'];
	  $id = $row['gameid'];

	  
	 $output .= '<div>' .$id. '</div>';
	
		
	}
	/*
?> <a  href="ProductPage.php?gameid=
	<?php echo $id ?>"<?php echo($fname)?></a> 
<!--<?php echo("$id"); ?>"> 
<?php $output ?> </p><?php ; ?>  -->
*/
}
}

	?>

<html>


<body>
<form action="searchResults.php" method="post">
  <input type="text" name="search" placeholder="Search for games" style="width:200px; height:30px; font-size:20;"/>
  <input type="submit" value=">"/>

</form>



</body>

</html>
