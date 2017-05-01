<?php
ob_start();
 
$con=mysqli_connect("localhost","nansei_admin","Virt8344ual","nansei_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//let's create the query
$sql= "INSERT INTO register (register_id,
                name,
				email,
				mobileno
				        ) VALUES (NULL,
                '$_POST[name]',
                '$_POST[email]',
				'$_POST[mobileno]')"; 

	
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
header("location:thankyou.html"); 	  	   
?>