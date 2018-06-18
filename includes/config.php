<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Dhaka");

	$con = mysqli_connect("localhost", "root", "", "slingomusix");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>