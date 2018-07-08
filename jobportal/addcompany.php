<?php
session_start();
require_once("db.php");

//if user clicked register button

if(isset($_POST)){

// escape special character in string
	$companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
	$headofficecity = mysqli_real_escape_string($conn, $_POST['headofficecity']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $website = mysqli_real_escape_string($conn, $_POST['website']);
	$companytype = mysqli_real_escape_string($conn, $_POST['companytype']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  $sql = "select email FROM company WHERE email='$email'";
  $result = $conn->query($sql);

    if($result-> num_rows == 0)
      {
        $sql="INSERT INTO company(companyname, headofficecity, contact, website, companytype, email, password) VALUES('$companyname', '$headofficecity', '$contact', '$website' , '$companytype', '$email', '$password')";

          if($conn->query($sql)===TRUE)
          	{
          	$_SESSION['register completed']=true;
          	header("location: companylogin.php");
          	exit();
             }
          else
            {
             echo "error" . $sql . "<br>" . $conn ->error;
             }
      }  else
          {
            $_SESSION['register error'] = true;
             header("location: company-register.php");
            exit();
          }


$conn->close();
}
else{
	header("location: company-register.php");
	exit();
}