<?php
	//////Establish Database connection
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "result";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$connection){
		die("Awaiting Resources");
	}
?>
