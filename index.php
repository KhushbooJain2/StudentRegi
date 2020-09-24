<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lab 8 </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Student Register</h2>
	</div>
	
	<form method="post" >

		<div class="input-group">
			<label>Roll Name</label>
			<input type="text" name="roll_number" placeholder="Enter Roll Number" required>
		</div>
		<div class="input-group">

			<label>Full Name</label>
			<input type="text" name="full_name" placeholder="Enter Your Name" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter Email" required>
		</div>
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" placeholder="Enter Mobile NUmber" name="mobileno" required>
		</div>	
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<a href="viewdata.php">View Details</a>
	</form>
</body>
</html>
