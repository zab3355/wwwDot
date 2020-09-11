<?php
	define("URL","http://serenity.ist.rit.edu/~iste240t03/");
	
	
	
	//$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	$mysqli = mysqli_connect("localhost", "iste240t03", "walldate", "iste240t03");
	// verify valid connection
	if (!$mysqli ) {
		echo "connection error: " . mysqli_connect_error();
		die(); //prevent further execution
	}
?>