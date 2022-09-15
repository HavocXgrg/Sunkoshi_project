<?php
//include CSS Style Sheet
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Sunkoshi | Municipality</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <header class=" text-center ">
    <div class="container-fluid ml-5 pl-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="d-flex justify-content-lg-start mt-4 mb-4">
            <img src="img/logo.PNG" class="img-fluid" alt="logo" style="height: 120px; width: 120px;">

            <div class="mt-5 text-danger">
              <h1>Sunkoshi Municipality</h1>
              <h3>Government Of Nepal</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <img style="max-width:100px;" src="https://mofaga.gov.np/images/np_flag.gif" alt="Local Government Logo">
        </div>
        <div class="col-lg-4 ">
          <form class="form-inline d-flex justify-content-lg-end my-5 mx-5" id="searchbar">
            <input class="form-control border border-1 border-dark" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>


    </div>
  </header>
  <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fs-5 mb-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto my-2">
          <li class="nav-item  px-3">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " href="Introduction.php">Introduction</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " href="programs.php">Programs</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " href="Reports.php">Reports</a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " href="Gallery.php">Gallery</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " href="Wards.php">Wards</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " href="covid.php">Covid-19 Report</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="notice.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Notice and Information
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Election News</a>
              <a class="dropdown-item" href="#">Annual Budget</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Other notices</a>
            </div>
          </li>

        </ul>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="sign_up.php"><span class="fas fa-user"></span> Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
          </li>
        </ul>

      </div>
    </nav>


    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>