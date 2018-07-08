<?php
session_start();
require_once("../db.php");

//if user clicked register button

if(isset($_POST)){


      $sql = "DELETE FROM jobpost where jobpost_id ='$_GET[id]' AND company_id = '$_SESSION[company_id]'";

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