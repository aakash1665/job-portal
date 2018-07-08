<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
              </script>


    <title>index page</title>

    <style type="text/css">
      .jumbotron
      {
        text-align: center;
      }

      .container1{
        border: 2px solid grey;
        border-radius: 10px;
        width: auto;

      }
     
     
     img{
      height: 500px;
      width: 1000px;

      
     }

     .container2
     {
      border: 3px solid black;
      height: auto;
      width: auto;
      margin: 5px;
      border-radius: 10px;
      
      
     }

     .row
     {
      padding: 15px;
      padding-left: 25px;
     
      
     }
     .card
     {
      position: relative;
      
      margin: 5px;

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


      <?php
      if(isset($_SESSION['userid'])){
        ?>

        <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="logout.php">logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="user/dashboard.php">dashboard</a>
      </li> <li class="nav-item">
        <?php
      }else{ ?>
    
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="login.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="company.php">hire</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="#">contact us</a>
      </li>
         <?php }?>

    </ul>
  </div>
</nav>

  <div class="jumbotron">

  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is the best palce to find your dream jobs .</p>
  
  <a class="btn btn-primary btn-lg" href="signup.php" role="button">Register here</a>
</div>

<div class="container">
    <div class="container1">
  <h3><center> Top Recuriter</center></h3>
  <img src="jober.png" class="img-fluid">
</div>
</div>


  <div class = "container">
      <div class="container2">
            <CENTER><h3> LATEST JOB</h3></CENTER>
             <div class="row">

                <?php 
                    $sql = "SELECT * FROM jobpost order By rand() limit 4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                      while ($row = $result->fetch_assoc()) {
                ?>

           
              <div class="card" col-lg-4 style="width: 15rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['jobtitle'];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['jobdiscription'];?></h6>
                  <p class="card-text"><?php echo $row['jobdiscription'];?></p>
                  <p class="card-text">Minimum Salary:-<?php echo $row['minsalary'];?></p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            
              <?php
            }
          }
          ?>
    </div>
  </div>




</body>
</html>
