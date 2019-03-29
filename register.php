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
	<?php include 'include/css_include.php' ?>
</head>
<body>
	<div class="wrapper">
			<!-- Navbar Header -->
			<nav class="navbar navbar-header sticky-top navbar-expand-lg" data-background-color="dark2">
				<div class="container-fluid">
					<div style="margin-left:40vw;">
						<a href="index.php" class="logo">
							<img src="assets/img/logo4.png" alt="navbar brand" class="navbar-brand">
						</a>
					</div>

				</div>
			</nav>
			<!-- End Navbar -->
            <!-- Login -->
            <div class="container">
                <div class="content-wrapper m-5">
                    <div class="row">
                        <div class="card col-6 offset-3">
                        	<h1 class="card-header">Hello There.!</h1>
                        	<div class="card-body">
                        		<h3 class="card-title">Please Register</h3>
                                <form  method="POST" action="login-system/sign-up.php">
            						<div class="form-row">
            							<div class="col">
            								<label class="col-form-label">First Name</label>
            								<input type="text" class="form-control" name="first" placeholder="First name">
            							</div>
            							<div class="col">
            								<label class="col-form-label">Last Name</label>
            								<input type="text" class="form-control" name="last" placeholder="Last name">
            							</div>
            						</div>
            						<div class="form-row">
            							<div class="col">
            								<label class="col-form-label">Username</label>
            								<input type="text" class="form-control" name="username" placeholder="Username">
            							</div>
            							<div class="col">
            								<label class="col-form-label">E-mail</label>
            								<input type="email" class="form-control" name="email" placeholder="Email">
            							</div>
            						</div>
            						<div class="form-row">
            							<div class="col">
            								<label class="col-form-label">Password</label>
            								<input type="password" class="form-control" name="password" placeholder="Password">
            							</div>
            							<div class="col">
            								<label class="col-form-label">Re-Enter Password</label>
            								<input type="password" class="form-control" name="re-password" placeholder="Re-Enter Password">
            							</div>
            						</div>
									<p class="m-3"><a style="text-decoration: none;" href="register.php"> Already Registered ? Login here</a></p>
									<div class="card-footer mt-4">
										<button type="submit" name="register" class="btn btn-dark mr-1">Register</button>
										<button type="button" id="HomeButton" name="back" class="btn btn-warning">Back</button>
									</div>
								</form>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Footer -->
            <footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2019 made by Sujit Singh
					</div>
				</div>
			</footer>
    </div>
    <!--   Core JS Files   -->
	<?php include 'include/js_include.php' ?>
	<script>
        document.getElementById("HomeButton").onclick = function () {
            location.href = "index.php";
        };
    </script>s
</body>
</html>
