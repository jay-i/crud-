<?php 
include 'config.php';
include 'process.php';
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
		<form method="post" action="">
			
			<label for="firstname">First Name:</label>
			<input type="text" name="fname" value="<?php echo $row['fname']; ?>"><br /><br />
			<label for="lname">Last Name:</label>
			<input type="text" name="lname" value="<?php echo $row['lname']; ?>"><br /><br />
			<label for="name">Email ID:</label>
			<input type="email" name="email" value="<?php echo $row['email']; ?>"><br /><br />
			<label for="name">Location:</label>
			<input type="text" name="location" value="<?php echo $row['location']; ?>"><br /><br />
			<input type="hidden" name="id" value="<?php echo $id; ?>"><br /><br />
			<input type="submit" name="update" value="Update">
		</form>
	</div>
</center>
</body>
</html>