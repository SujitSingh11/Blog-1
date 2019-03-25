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
		<div class="main-header">
			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				<div class="container-fluid">
                    <a href="index.php" class="logo">
    					<img src="assets/img/logo4.png" alt="navbar brand" class="navbar-brand">
    				</a>
				</div>
			</nav>
			<!-- End Navbar -->
            <!-- Login -->
            <div class="container">
                <div class="content-wrapper m-5">
                    <div class="mx-5 col-6">
                        <div class="card">
                        	<h1 class="card-header">Hello there.!</h1>
                        	<div class="card-body">
                        		<h4 class="card-title">Please Login</h4>
                        		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        		<a href="#" class="btn btn-primary">Go somewhere</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2019 made by Sujit Singh
					</div>
				</div>
			</footer>

		</div>
    </div>
    <!--   Core JS Files   -->
	<?php include 'include/js_include.php' ?>
</body>
</html>
