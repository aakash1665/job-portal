<?php
session_start();
require_once("db.php");

if(isset($_POST)){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "select userid, firstname, lastname, email FROM users WHERE email='$email' AND password = '$password' ";
    $result = $conn->query($sql);

    if($result-> num_rows > 0)
    {
         while ($row = $result->fetch_assoc()) {
            $_SESSION['name'] = $row['firstname']."". $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userid'] = $row['userid'];
            header("location:user/dashboard.php");
            exit();

         }
    }else
    {
        $_SESSION['login error']=true;
        header("location:login.php");
        exit();
    }


$conn->close();

}   else
{
    header("location:login.php");
    exit();
}