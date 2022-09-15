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
            <li class="nav-item active px-3">
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
            <li class="nav-item px-3">
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
    </section>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/vhawan.PNG" style="height: 531px;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/vhitra.PNG" style="height: 531px;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/sunkoshi1.PNG" style="height: 532px;" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- welcome section starts  -->

    <div class="container-fluid text-center">
      <div class="row">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <h1>Welcome to Sunkoshi Rural Municipality</h1>
          </div>
          <div class="panel panel-body">
            <p class="display-6"><small>
                A rural Municipality located in sindhuli district of Bagmati Province in Nepal is
                none other than our beautiful Sunkoshi Rural Municipality. It is divided into 7 wards. The municipality has 4,557 homes and a total population of 21,473 as per the 2011 Nepal census.
                The municipality has a total size of 158.68 square kilometers (61.27 sq mi) The municipality's administrative center is in Jhangajholi Ratmata.
                The Ministry of Federal Affairs and Local Development disbanded the current village development committees and announced the creation of this new municipality on March 10, 2017,
                which is when the rural municipality was founded.
                To create the new rural municipality, the VDCs of Kusheshwar Dumja, Jhangjholi Ratmata, Purano Jhangajholi, Sitalpati, and Majhuwa were combined.
            </p></small>
          </div>
        </div>
      </div>
    </div>

    <!--  welcome end-->

    <!-- Notice and Information contents starts -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-primary">
            <div class="panel panel-heading">
              <h2>Notices and Information </h2>
            </div>
          </div>

          <div class="panel panel-warning">
            <div class="panel panel-heading">
              <h2>Election News </h2>
            </div>

            <div class="panel panel-body">
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusamus consequatur minus reiciendis!
                Cupiditate ullam totam aperiam debitis. Dignissimos quae illum necessitatibus possimus cumque fuga a laborum maiores asperiores est!
              </h3>
            </div>
          </div>

          <div class="panel panel-warning">
            <div class="panel panel-heading">
              <h2> Annual Budget</h2>
            </div>

            <div class="panel panel-body">
              <h3>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid possimus dolorem,
                dolor officia earum eos accusantium incidunt amet minus obcaecati magni,
                laudantium, quos odio quidem rem? Itaque voluptates eum aspernatur.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid possimus dolorem, dolor officia earum eos accusantium incidunt amet minus obcaecati magni,
                laudantium, quos odio quidem rem? Itaque voluptates eum aspernatur.
              </h3>
            </div>
          </div>

          <div class="panel panel-warning">
            <div class="panel panel-heading">
              <h2> Other Notices</h2>
            </div>

            <div class="panel panel-body">
              <h3>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid possimus dolorem,
                dolor officia earum eos accusantium incidunt amet minus obcaecati magni,
                laudantium, quos odio quidem rem? Itaque voluptates eum aspernatur.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid possimus dolorem, dolor officia earum eos accusantium incidunt amet minus obcaecati magni,
                laudantium, quos odio quidem rem? Itaque voluptates eum aspernatur.
              </h3>
            </div>
          </div>
          <!-- Notice and Information contents ended -->

          <!-- Right side content about covid starts -->
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel panel-heading">
              <h3> Covid Rules to be followed In Sunkoshi Municipality</h3>
            </div>

            <div class="panel panel-body">
              <img src="img/images2.GIF" class="pull-left mr-2" width="39%">
              <p class="display-4">Corona can cause us severe pain and fever.</p>
            </div>

            <div class="panel panel-body">
              <img src="img/images.GIF" class="pull-left mr-2" width="39%">
              <p class="display-4">Thus we need to use Mask while walking in the public.</p>
            </div>

            <div class="panel panel-body">
              <img src="img/wash.jpg" class="pull-left mr-2" width="39%">
              <p class="display-5"> we need to wash our hands properly after doing certain activities.</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Notices and Information ends here -->

    <!-- Footer starts here -->

    <div class="container-fluid jumbotron mb-auto" style="background-color: #066; color:white;">
      <div class="row">
        <div class="col-sm-4">
          <h2><u>Contact Us:</u></h2>
          <div class="mt-4">
            <h3>Sunkoshi Rural Municipality</h3>
          </div>
          <p><span class="glyphicon glyphicon-map-marker"></span> Ramtar, Sindhuli, Nepal</p>
          <p><span class="glyphicon glyphicon-phone"></span> 027-540-381</p>
          <p><span class="glyphicon glyphicon-envelope"></span>Municipality_sunkoshi@yahoo.com</p>
        </div>

        <div class="col-sm-4">
          <div class="pb-4">
            <h2><u>Google Map</u></h2>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13909.42393057373!2d85.88827473899025!3d27.40935421816253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb937400000001%3A0x14acca8cce0ed6ea!2sSunkoshi%20Gaunpalika%20Office!5e1!3m2!1sen!2snp!4v1663248661574!5m2!1sen!2snp" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-sm-4">
          <div class="pb-4">
            <h2><u>Social Media</u></h2>
          </div>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunkoshimun%2Fphotos&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>

        <div class="mt-5">
          <footer class="container-fluid text-center">
            <p>Copyright Ⓒ Bishwa Gurung</p>
          </footer>
        </div>
      </div>
    </div>




    </div>













    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>

  </html>