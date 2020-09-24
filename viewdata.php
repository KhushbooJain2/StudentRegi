<?php 
include 'server.php';
echo "<h3> Student Details</h3>";
  $show_query="select * from student_details";
  $result=mysqli_query($db,$show_query);
  $count=1;
echo "<table border=1><tr bgcolor='#F65B5B'><td>Sr no</td><td>Roll Number</td><td>full Name</td><td>Email</td><td>Mobile Number</td></tr>";

 while ($row=mysqli_fetch_array($result)) {

   echo '<tr>  <td> '.$count++.'</td>
        <td> '.$row[1].' </td>
        <td> '.$row[2].' </td>
        <td> '.$row[3].' </td>
        <td> '.$row[4].' </td>
         </tr> ';
    }
    echo "</table>";
?>
<a href="index.php">Back</a>