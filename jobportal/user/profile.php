<?php
session_start();
if(empty($_SESSION['userid'])) {
  header("location: ../first.php");
  exit();
}
require_once("../db.php");
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
            height: auto;
            width: 700px;
            margin: 100px 500px 100px 300px;
            padding-left: 10px;
            padding-right: 10px;


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

        button{
            margin-right: 100px;

        }
        .reg{
            color: white;
            margin: 25px;
            font-size: 22px;
        }
        .type
        {
          color: white;
          font-size: 22px;

        }
        label
        {
          color: white;

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

    
    <div class = "borderr">
        <h2> PROFILE</h2>
        <form method="post" action="updateprofile.php">
          <?php
            $sql = "SELECT * FROM users WHERE userid = '$_SESSION[userid]'";
            $result = $conn->query($sql);

            if ($result -> num_rows>0){
              while($row = $result->fetch_assoc())  {
                ?>
              
              


          <div class ="type"> Personal details</div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="first name" value="<?php echo $row['firstname'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name"value="<?php echo $row['lastname'];?>">
    </div>
    <div class="form-group col-md-12">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="abc@email.com"  value="<?php echo $row['email'];?>" readonly>
    </div>
  </div>
  
  <div class="form-group">
    <label for=address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St"value="<?php echo$row['address'];?>">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="City">City</label>
      <input type="text" class="form-control" id="City"value="<?php echo $row['city'];?>">
    </div>
    
    <div class="form-group col-md-4">
      <label for="state">state</label>
      <input type="text" class="form-control" id="state"value="<?php echo $row['state'];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="pin">pincode</label>
      <input type="text" class="form-control" id="pin"value="<?php echo $row['pincode'];?>">
    </div>
  </div>
  <div class="form-group col-md-12">
      <label for="contact">contact No.</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="0000002" value="<?php echo $row['contact'];?>">
    </div>
  
  <div class="type">Education Qualifications</div>
   <div class="form-group">
    <label for="Qualification">Heighest Qualification</label>
    <input type="text" class="form-control" id="Qualification" name="Qualification" placeholder="" value="<?php echo $row['qualification'];?>">
  </div>


    <div class="form-group col-md-12">
          <label for="stream">Stream</label>
          <select id="stream" class="form-control">
            <option selected>Choose...</option>
            <option>Computer Science</option>
            <option>Electrical&Communication</option>
            <option>Electrical Engineering</option>
            <option>Information Technology</option>
            <option>Civil</option>
            <option>Mechanical</option>
          </select>
        </div>

        <div class="form-group">
    <label for="passingyear">Passing Year</label>
    <input type="text" class="form-control" id="passingyear" name="year" placeholder="" value="<?php echo  $row['passingyear'];?>">
  </div>

<div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="Date" class="form-control" id="dob" name="dob" placeholder=""value="<?php echo $row['dob'];?>">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" id="age" name="Age" placeholder="" value="<?php echo $row['age'];?>">
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" id="designation" name="Designation" placeholder="" value="<?php echo $row['designation'];?>">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>

  <?php
      }
    }
    ?>
</form>
    </div>

    

</body>
</html>
