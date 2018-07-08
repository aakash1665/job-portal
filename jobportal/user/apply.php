<?php
session_start();
require_once("../db.php");

//if user clicked register button

if(isset($_POST)){

    $sql = "SELECT * FROM jobpost where jobpost_id = '$_GET[id]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
      {
        $row = $result->fetch_assoc();
        $company_id = $row['company_id'];
      }
  
        $sql = "INSERT INTO applyjobpost(jobpost_id, company_id, userid) VALUES 
                                                            ('$_GET[id]','$company_id', '$_SESSION[userid]')";

          if($conn->query($sql)===TRUE)
          	{
          	$_SESSION['jobApplysuccess']=true;
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