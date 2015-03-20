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
	
	$query = mysql_query("SELECT * FROM PRODUCTS WHERE gamenames LIKE '%$searchq%'") or die("Could not search");
	$count = mysql_num_rows($query);
	if($count == 0) {
		$output = 'There were no search results';}
		
		else{
	while($row = mysql_fetch_array($query)) {
	  $fname = $row['gamenames']	;
	  
	  $output .= '<div> '.$fname.' </div>';
	  
		
	}	
}
}

	
	
		

<html>


<body>
<form action="index.php" method="post">
  <input type="text" name="search" placeholder="Search for games"/>
  <input type="submit" value=">>" />

</form>

<?php print("$output");?>


</body>

</html>