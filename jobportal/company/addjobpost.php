<?php
session_start();
require_once("../db.php");

//if user clicked register button

if(isset($_POST)){

// escape special character in string
	$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$jobdiscription = mysqli_real_escape_string($conn, $_POST['jobdiscription']);
	$minsalary = mysqli_real_escape_string($conn, $_POST['minsalary']);
  $maxsalary = mysqli_real_escape_string($conn, $_POST['maxsalary']);
	$exprience = mysqli_real_escape_string($conn, $_POST['exprience']);
  $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

      $sql = "INSERT INTO jobpost(company_id, jobtitle, jobdiscription, minsalary, maxsalary, exprience, qualification) VALUES
      ('$_SESSION[company_id]', '$jobtitle', '$jobdiscription', '$minsalary', '$maxsalary', '$exprience', '$qualification')";

          if($conn->query($sql)===TRUE)
          	{
          	$_SESSION['jobpostsuccess']=true;
          	header("location: dashboard.php");
          	exit();
             }
          else
            {
             echo "error" . $sql . "<br>" . $conn ->error;
             }


$conn->close();
}
else{
	header("location: dashboard.php");
	exit();
}