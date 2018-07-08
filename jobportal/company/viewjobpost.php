<?php
session_start();
if(empty($_SESSION['company_id'])) {
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


    <title>Company Dashboard</title>

    <style type="text/css">


      .jumbotron
      {
        text-align: center;
      }

      .container{
        border: 2px solid grey;
        border-radius: 10px;
        margin-top: 75px;
        margin-bottom: 20px;
        padding-bottom: 25px;

      }
     
     .col-sm
     {
     
      border: 2px solid black;
      position: absolute;
     }
     img{
      height: 500px;
      width: 1000px;
      position: relative;
     }
     .greet
    {
      margin: 50px;
      color:blue;
      font-size: 35px;
    }
    .table
    {
      padding-top: 15px;
    }
    h3
    {
      margin-top: 80px;
      margin-bottom: 30px;
      text-align: center;
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
<h3> VIEW JOB POST</h3>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Job Title</th>
      <th scope="col">Job Discription</th>
      <th scope="col">Minimum Salary</th>
      <th scope="col">Maximum Salary</th>
      <th scope="col"> Exprience</th>
      <th scope="col">Qualifications </th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM jobpost where company_id = '$_SESSION[company_id]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        ?>
     <tr>
      
      <td><?php echo $row['jobtitle']; ?></td>
      <td><?php echo $row['jobdiscription']; ?></td>
      <td><?php echo $row['minsalary']; ?></td>
      <td><?php echo $row['maxsalary']; ?></td>
      <td><?php echo $row['exprience']; ?></td>
      <td><?php echo $row['qualification']; ?></td>
      <td><?php echo date("M-Y",strtotime($row['createddat'])); ?></td>
      <td>
        <a href="editjobpost.php?id=<?php echo $row['jobpost_id'];?>" class="btn btn-primary">Edit</a>
        <a href="deletejobpost.php?id= <?php echo $row['jobpost_id'];?>" class="btn btn-primary">delete</a>
      </td>

    </tr>
    <?php
  }}
  $conn->close();
  ?>
    
  </tbody>
</table>


</body>
</html>



