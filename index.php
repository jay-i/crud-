<?php 
include 'config.php';

$fname = ''; $lname = ''; $email = ''; $location = '';
if(isset($_POST['btn'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$location = $_POST['location'];
	
	$sql = "INSERT INTO crud (fname, lname, email, location) VALUES ('$fname', '$lname', '$email', '$location')";
	
	$insert = $con->query($sql);
	
	if($insert){
		echo  "<div style='color: green; font-weight: bold;'>Record Successfully inserted</div>";
		header("Location: read.php");
	}else{
		die("ERROR: Could not insert data: " .$con->connect_error);
	}

}

?>

<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css">
	
</head>
<body>
<center>
	<div class="container">
		<h2>Add New Record</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<label for="firstname">First Name:</label>
			<input type="text" name="fname" placeholder="Enter First Name..."><br /><br />
			<label for="lname">Last Name:</label>
			<input type="text" name="lname" placeholder="Enter Last Name..."><br /><br />
			<label for="name">Email ID:</label>
			<input type="email" name="email" placeholder="Enter Email..."><br /><br />
			<label for="name">Location:</label>
			<input type="text" name="location" placeholder="Enter Location..."><br /><br />
			<input type="submit" name="btn" value="Add">
		</form>
	</div>
</center>
</body>
</html>