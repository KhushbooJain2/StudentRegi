<?php
$db=mysqli_connect('project-hosting-database.cdlz8fvxi9ag.us-east-1.rds.amazonaws.com','admin',"Khushboords","student");
if(isset($_POST['reg_user']))
{
	$roll_number = mysqli_real_escape_string($db, $_POST['roll_number']);
	$full_name = mysqli_real_escape_string($db, $_POST['full_name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
	
			$query = "INSERT INTO student(roll_number,full_name,email,mobileno) 
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
