<?php
	$db = new mysqli('194.81.104.22', 'team1', 's!mpl1', 'db_team1');
                    // ip address       username    password    database name 
	if($db->connect_errno){
                    die('Unable to connect to database: ' . $db->connect_error);
        }
        ?>