<?php
$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$Session_name = "user";
$Session_pass = "pass";
$Session_value = "";

include('DB_connection.php');


$sql= "SELECT * FROM ADMIN WHERE username='$myusername' AND password='$mypassword'";
$result=$db ->query($sql);
if(!$result){
die('There was an error running the query' .$db->error);
}

else {
    if ($result->num_rows > 0) {
        
    while($row = $result->fetch_assoc()) {
        
        $usr = $row["username"];
        $pss = $row["password"];
        
        
    } 
session_start(); 
$_SESSION[$Session_name] = $usr;
$_SESSION[$Session_pass] = $pss; 
header('Location: /~2027c_1/Homepage.php');
} 
else{
   header('Location: /~2027c_1/Homepage.php');

}
    }

                                
	$db->close();
?>