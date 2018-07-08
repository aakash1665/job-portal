<?php
session_start();
require_once("../db.php");


if(isset($_POST))
{
	$firstname =     mysqli_real_escape_string($conn,$_POST['fname']);
	$lastname =    	 mysqli_real_escape_string($conn,$_POST['lname']);
	$address =       mysqli_real_escape_string($conn,$_POST['address']);
	$city =        	 mysqli_real_escape_string($conn,$_POST['city']);
	$state =       	 mysqli_real_escape_string($conn,$_POST['state']);
	$pincode =     	 mysqli_real_escape_string($conn,$_POST['pin']);
	$contact = 	     mysqli_real_escape_string($conn,$_POST['contact']);
	$Qualification = mysqli_real_escape_string($conn,$_POST['Qualification']);
	$stream = 		 mysqli_real_escape_string($conn,$_POST['stream']);
	$passingyear = 	 mysqli_real_escape_string($conn,$_POST['passingyear']);
	$dob =			 mysqli_real_escape_string($conn,$_POST['dob']);
	$age =			 mysqli_real_escape_string($conn,$_POST['age']);
	$designation = 	 mysqli_real_escape_string($conn,$_POST['designation']);
	

	//update query

	$sql ="UPDATE users SET firstname ='$firstname', lastname='$lastname', address ='$address', city = '$city', 
										state ='$state', pincode='$pincode', contact='$contact',
										qualification='$qualification',stream='$stream',passingyear='$passingyear',
										dob='$dob',age='$age',designation='$designation' 
		   WHERE userid='$_SESSION[userid]'";
		   echo "inserted";
	if ($conn->query($sql)===TRUE)
	{
		header("location:dashboard.php");
		exit();
	}
	else{
		echo "Error". $sql . "<br>". $conn->error;
	}

$conn->close();
}
else
	{
		header("location:dashboard.php");
		exit();

	}
	