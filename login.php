<!-- 
//include CSS Style Sheet
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using php with Mysql</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <form action="" method="POST">

        <section>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary text-white fs-5 mb-0">
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
        </section>

        <section class="vh-100 bg-secondary gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h1 class="fw-bold mb-2 text-uppercase">Login</h1>
                                    <h3 class="text-white-50 mb-5">Please enter your login and password!</h3>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="username" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">
                                            <h3>Username </h3>
                                        </label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">
                                            <h3>Password</h3>
                                        </label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$aa=$_POST['username'];
	$bb=$_POST['password'];

	if($aa=='' || $bb=='')
	{
		echo "<script>window.alert('Username or password is empty')</script>";
	}
	else
	{
		$query="select * from users where username='$aa' and password='$bb'";
		$run=mysqli_query($conn,$query);
		if(mysqli_num_rows($run)>0)
		{
			$_SESSION['username']=$aa;
			echo "<script>window.open('main.php','_self')</script>";
		}
		else
		{
			echo "<script>window.alert('Invalid user')</script>";
		}
	}
}
mysqli_close($conn);
?>
