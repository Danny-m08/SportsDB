
<html>
	<head><title>My Sports DB</title></head>
		<h2>Enter your name and login to enter</h2>

		<form method = 'POST'>
	
			Username: <input type 'text' name ='Username'/>
			<br>
			Password: <input type 'text' name ='Password'>
			<button type='submit' = "">Submit</button>
		</form>
		<br>
</html>
		
<?php

	include('connect.php');
	$result = $connection->query("SELECT username, password FROM users WHERE username = '".$_POST['Username']."'"); 
	$row = $result->fetch_assoc();


	if( empty($_POST['Username']) || empty($_POST['Password']) ):
?>
	<html>
	<form method = 'POST' action = "form.php">
		<button type 'Submit' value = 'button'>Become a user</button>
	</form>
	</html>

<?php
	elseif( mysqli_num_rows($result) == 0) : 
		echo $_POST['Username']." does not have the proper credentials to use the database\n";?>

		<html>
		<form method ='POST' action ="form.php" >
			Would you like to register to use the database? <button type = 'submit'>Yes</button>
			<button type = 'submit' formaction="index.php">No</button>
					</form>

		</html>
<?php
	elseif( !strcmp( $row['password'], $_POST['Password']) ): 
?>		
		<html>
			<form action = "query.php">
				<button type 'Submit'>Go to Query</button>
		</html>

<?php 
	else: 
		echo "Unable to verify user ... Please try again.";
	 endif; ?>	










	