<?php
session_start();
require_once("db.php");

if(isset($_POST)){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "select company_id, companyname, email FROM company WHERE email='$email' AND password = '$password' ";
    $result = $conn->query($sql);

    if($result-> num_rows > 0)
    {
         while ($row = $result->fetch_assoc()) {
            $_SESSION['companyname'] = $row['companyname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['company_id'] = $row['company_id'];
            header("location:company/dashboard.php");
            exit();

         }
    }else
    {
        $_SESSION['login error']=true;
        header("location:companylogin.php");
        exit();
    }


$conn->close();

}   else
{
    header("location:companylogin.php");
    exit();
}