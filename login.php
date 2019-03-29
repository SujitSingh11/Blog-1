<?php
	include 'assets/db/database.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Monu Music</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/MonuMusico.png">
	<!-- Fonts and icons -->
	<?php include 'include/font_include.php' ?>
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
	<div class="wrapper">
			<!-- Navbar Header -->
			<nav class="navbar navbar-dark bg-dark" >
				<div class="container-fluid">
						<a href="index.php" class="logo">
							<img src="assets/img/logo4.png" alt="navbar brand" class="navbar-brand">
						</a>
				</div>
			</nav>
			<!-- End Navbar -->
            <!-- Login -->
            <div class="container">
                <div class="content-wrapper m-4">
                    <div class="row">
                        <div class="card col-6 offset-3">
                        	<h1 class="card-header">Welcome back.!</h1>
                        	<div class="card-body">
                        		<h3 class="card-title">Please Login</h3>
								<form  method="POST" action="login-system/sign_in.php">
									<div class="col">
										<label class="col-form-label">Username</label>
										<input type="text" class="form-control" name="username" placeholder="Username">
									</div>
									<div class="col">
										<label class="col-form-label">Password</label>
										<input type="text" class="form-control" name="password" placeholder="Password">
									</div>
									<p class="m-3"><a style="text-decoration: none;" href="login-system/forgot_form.php"> Forgot Password ? </a></p>
									<p class="m-3"><a style="text-decoration: none;" href="register.php"> First Time ? Register here</a></p>
									<div class="card-footer mt-4">
										<button type="submit" name="login" class="btn btn-dark mr-1">Login</button>
										<button type="button" id="HomeButton" name="back" class="btn btn-warning">Back</button>
									</div>
								</form>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
			<!-- Footer -->
            <footer class="container-fluid m-3">
				@2019 made by Sujit Singh
			</footer>

    <!--   Core JS Files   -->
	<?php include 'include/js_include.php' ?>
	<script>
        document.getElementById("HomeButton").onclick = function () {
            location.href = "index.php";
        };
    </script>
</body>
</html>
