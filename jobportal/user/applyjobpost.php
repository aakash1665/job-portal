<?php
session_start();
if(empty($_SESSION['userid'])) {
	header("location: ../first.php");
	exit();
}
require_once("../db.php");

?>

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
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
              </script>


    <title>index page</title>

    <style type="text/css">

      .container{
        border: 2px solid grey;
        border-radius: 10px;
        margin-bottom: 15px;

      }
     
     .col-sm
     {
     
      border: 2px solid black;
      position: absolute;
     }
     .greet
    {
      margin: 50px;
      color:blue;
      font-size: 35px;
    }
    .btn
    {
      margin: 5px;
      padding: 5px;
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
        <a class="nav-link "style="color:#f2f2f2;" href="../first.php">home <span class="sr-only">(current)</span></a>
      </li>
        <a class="nav-link"style="color:#f2f2f2;" href="../logout.php">logout</a>
      </li>
      </li> <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="profile.php">profile</a>
      </li>
    
    </ul>
  </div>
</nav>

<div class="greet"> Hi! <?php echo $_SESSION['name']; ?>

welcome to jobportal</div>


<div class ="container">
  <div class = "row">

    <a  href="#" class="btn btn-primary">Applied Jobs</a>
     <a href="#" class="btn btn-primary">My Resume</a>
  </div>
</div>
<h3>VIEW JOB POST</h3>
 <!-- view and search job-->
<div class ="container">
  <div class = "row">
    
      <?php 
    $sql = "SELECT * FROM jobpost where jobpost_id = '$_GET[id]'";
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
                  <a href="apply.php?id = <?php echo $row['jobpost_id'];?>" class="btn btn-primary">Apply Now</a>
                
              </div>

      <?php
    }
  }?>
</div>
</div>

</body>
</html>



