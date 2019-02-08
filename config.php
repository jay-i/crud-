<?php
$server = "localhost";
$username = "root";
$password = "password";

$con = new mysqli("localhost", "root", "", "crudcp");

// check connection 
if($con->connect_error){
	die("ERROR: Connection error: " . $con->connect_error);
}
else{
	//echo "Connection Successful";
}

?>