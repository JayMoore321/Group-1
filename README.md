Group-1
=======
<?php

  $servername = "194.81.104.22";
  $username = "team1";
  $password = "group1";
  $dbname = "db_team1";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO CUSTLOGIN (emailaddress, username, password)
VALUES ('jackieboi@email.com', 'jackie68', 'password1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

//Test by Jay Moore
