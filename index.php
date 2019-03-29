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
    </div>
    <!--   Core JS Files   -->
	<?php include 'include/js_include.php' ?>
</body>
</html>
