<?php
include 'config.php';
$result = $con->query("SELECT * FROM crud") or die($con->error);
?>

<center><table border=1>
	<thead>
		<tr>
			<th>No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email ID</th>
			<th>Location</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php  
		while($row = $result->fetch_assoc()):?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['fname'];?></td>
			<td><?php echo $row['lname'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['location'];?></td>
			<td>
				<a href="update.php?edit=<?php echo $row['id']; ?>">Edit</a>
				<a href="process.php?delete=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
	<?php endwhile;?>
	<a href="index.php">Add New Record</a>
</table>
</center>