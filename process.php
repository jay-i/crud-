<?php
include 'config.php';

if(isset($_POST['update'])){
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$location = $_POST['location'];
		
		$sql = "UPDATE crud SET fname = '$fname', lname = '$lname', email = '$email', location = '$location' WHERE id = '$id' ";
		$update = $con->query($sql);
		if($update){
			 header("Location: read.php");
		}else{
			echo "Error occurred";
		}
	}
		
		$id = $_GET['edit'];
		$id = $_GET['edit'];	
		$sql = "SELECT * FROM crud WHERE id='$id'" or die($con->error);
		$result = $con->query($sql);
		$row = $result->fetch_assoc();

		
	
	
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$sql = "DELETE FROM crud WHERE id='$id'";
	$del = $con->query($sql);
	if($del){
		header("Location: read.php");
	}else{
		die("ERROR: Could not delete record: " .$con->connect_error);
	}
}
?>