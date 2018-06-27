<?php 
	$connection = mysqli_connect("127.0.0.1","root","stevefrench","users");

	if($connection->connect_errno){
		echo "Failed to connect to database...\n";
				exit();
		}
	 ?>