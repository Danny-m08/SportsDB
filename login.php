
<?php

	include('connect.php');
	$result = $connection->query("SELECT username, password FROM users WHERE username = '".$_POST['Username']."'"); 
	$row = $result->fetch_assoc();



	if( mysqli_num_rows($result) == 0) : 
		echo $_POST['Username']." does not have the proper credentials to use the database\n";?>

		<html>
		<form method ='POST' action ="form.php" >
			Would you like to register to use the database? <button type = 'submit'>Yes</button>
			<button type = 'submit' formaction="index.php">No</button>
					</form>

		</html>
	
	<?php elseif( !strcmp( $row['password'], $_POST['Password']) ): ?>
		<html>
		<h3> Welcome to the Sports Database</h3>
		<p> click to access our query -></p>
		<button type = 'button' onclick='location'="query.php">
		</button>
		</html>
	<?php else:?>
		<html>
		<h2>Unable to verify user</h2>
		<p>	Please <a href = "index.php">return</a> To the main page.</p>
		</html>
	<?php endif; ?>	
	
	
	
 