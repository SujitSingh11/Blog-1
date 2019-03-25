<?php
/* Database connection settings */

$conn = mysqli_connect('localhost','root','','my_blog');

  	if (!$conn) {
  		die("connection failed " . mysqli_connect_error());
  	}

?>
