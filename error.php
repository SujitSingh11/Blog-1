<?php
	include 'assets/db/database.php';
	session_start();
	$_SESSION['message'] = "asdasd";
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
                <div class="content-wrapper m-3">
                    <div class="row">
            			<div class="col-sm-6 offset-sm-3">
                            <div class="card" style="margin-top: 15vh; margin-bottom: 25vh;">
                                <h2 class="card-header">Error.!</h2>
                				<div class="card-body m-3">
                                    <?php
                                        if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                        else:
                                            header( "location: index.php" );
                                        endif;
                                    ?>
                				</div>
                                <div class="card-footer">
                                    <button id="HomeButton" type="button" class="btn btn-info">Home</button>
                                </div>
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
    </script>
</body>
</html>
