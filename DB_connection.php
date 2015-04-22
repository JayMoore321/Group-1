<?php
    DEFINE ('DB_HOST', '194.81.104.22');  // Host IP Address 
	DEFINE ('DB_USER', 'team1'); //User Name to long into 
	DEFINE ('DB_PASSWORD', 'group1'); //Password to allow log in
	DEFINE ('DB_NAME', 'db_team1');  //Database name

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) //MYSQLI is used to create the connectiom
	OR die('Could not connect to MySQL: ' . // if connection could not happen
	mysqli_connect_error()); // Any errors that occur 
	?>
