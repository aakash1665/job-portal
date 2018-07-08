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

      $sql = "UPDATE jobpost SET jobtitle ='$jobtitle', jobdiscription ='$jobdiscription', 
                              minsalary= '$minsalary', maxsalary='$maxsalary', exprience = '$exprience', 
                              qualification = '$qualification' 
                              where jobpost_id ='$_POST[target_id]' AND company_id = '$_SESSION[company_id]";

          if($conn->query($sql)===TRUE)
          	{
          	$_SESSION['jobpostdeletesuccess']=true;
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