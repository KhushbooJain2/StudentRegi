<?php
$db=mysqli_connect('database-1.ce3o1dpuwdox.us-east-1.rds.amazonaws.com','admin',"admin123","student");
if(isset($_POST['reg_user']))
{
	$roll_number = mysqli_real_escape_string($db, $_POST['roll_number']);
	$full_name = mysqli_real_escape_string($db, $_POST['full_name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
	
			$query = "INSERT INTO student_details(roll_number,full_name,email,mobileno) 
					  VALUES('$roll_number','$full_name','$email','$mobileno')";
			$row=mysqli_query($db,$query);
			if ($row) {
				header('location: thank.php');
				# code...
			}
			else
			{
				echo "Invalid Details";
			}
		

}

?>
