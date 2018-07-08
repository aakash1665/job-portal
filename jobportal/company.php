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
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
              </script>


    <title>index page</title>

    <style type="text/css">
      .jumbotron
      {
        text-align: center;
      }

      .container{
        border: 2px solid grey;
        border-radius: 10px;

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

     .container2
     {
      padding: 5px;
      

     }
     .card-body
     {
      border: 1px solid white;
      box-shadow:1px 3px 3px 1px;
      background-color: #F8F8F8;
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
      </li> <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="company.php">company</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="companylogin.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"style="color:#f2f2f2;" href="company-register.php">Register</a>
      
    </ul>
  </div>
</nav>

  <div class="jumbotron">

  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is the best palce to find your dream jobs .</p>
  
  <a class="btn btn-primary btn-lg" href="company-register.php" role="button">Register here</a>
</div>

  <div class = "container">
      <div class="container2">
            <CENTER><h3> LATEST JOB</h3></CENTER>

            <div class="row">

              <div class="card" col-lg-4 style="width: 18rem; height:auto;">
                <div class="card-body">
                  <h5 class="card-title">Company Name</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="company-register.php" class="card-link">Register</a>
                  <a href="companylogin.php" class="card-link">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>


</body>
</html>
