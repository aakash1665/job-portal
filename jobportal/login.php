<?php
session_start();
if(isset($_SESSION['userid']))
{
  header("location:user/dashboard.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <title>login</title>

    <style>
        body{
            background-image: url(pic.jpg);

        }
        h2{
            text-align: center;
            color: white;
        }

        .borderr
        {
            border:0px solid white;
            box-shadow:5px 10px 15px 15px;
            border-radius: 10px;
            height: 350px;
            width: 350px;
            margin: 100px 500px 200px 450px;
            padding-left: 15px;
            padding-right: 15px;


        }
        .content
        {
            margin: 15px;
            color: white;

        }
        input {
            width: 100%;
            border-radius: 5px;
            border: 2px solid darkgrey;
        }


        input:focus
        {
            width: 100%;
            border-radius: 5px;
            border:1px solid blue;
            border-radius: 5px;

        }
        input[type=button],[type=submit]
        {
            background-color: #627bff;
            border:none;
            text-decoration: none;
            width: 100%;
            color: white;

        }

        .butn{
            align-items: center;
        }
        .reg{
            color: white;
            margin: 25px;
            font-size: 22px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg fixed-top" style="background-color: #a3297a" >
  <a class="navbar-brand " style="color: #ffffff;" href="#"><b>Job Portal</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" >
        <a class="nav-link "style="color:#f2f2f2;" href="first.php">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="signup.php">register</a>
      </li> <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="#">contact us</a>
      </li>
    
    </ul>
  </div>
</nav>


    <div class = "borderr">
        <h2> LOGIN</h2>
        <form method="post" action="check.php">
  <div class="form-group">
    
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="Email" name="email" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

  <?php
  if(isset($_SESSION['register completed'])){
    ?>
  <div>
  <center><p class="reg">Register Sucessfully</p></center></div>
  <?php
  unset($_SESSION['register completed']);}
  ?>


  <?php
  if(isset($_SESSION['login error'])){
    ?>
  <div>
  <center><p class="reg">invalid user</p></center></div>
  <?php
  unset($_SESSION['login error']);}
  ?>
</form>
    </div>


</body>
</html>
