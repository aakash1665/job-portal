<?php
session_start();
require_once("db.php");

//if user clicked register button

if(isset($_POST)){

// escape special character in string
	$firstname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
  
  $sql = "select email FROM users WHERE email='$email'";
  $result = $conn->query($sql);

    if($result-> num_rows == 0)
      {
        $sql="INSERT INTO users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";

          if($conn->query($sql)===TRUE)
          	{
          	$_SESSION['register completed']=true;
          	header("location: login.php");
          	exit();
             }
          else
            {
             echo "error" . $sql . "<br>" . $conn ->error;
             }
      }  else
          {
            $_SESSION['register error'] = true;
             header("location: signup.php");
            exit();
          }


$conn->close();
}
else{
	header("location: signup.php");
	exit();
}