<html>
	<head><title>Sign up</title></head>
	<h2> Register for an account </h2>

	<form method = 'POST'>
		Username: <input type="text" name="username">
		<br>
		Password: <input type="text" name="password1">
		<br>
		Re-enter Password: <input type="text" name="password2">
		<br>
		<button type= 'submit'>Submit</button>
	</form>
</html>
<?php 
	
	include("connect.php");

	if( !strcmp ($_POST['username'], '') || !strcmp($_POST['password1'],'') || !strcmp($_POST['password2'],'')):
	 		echo 'Please fill out all text fields.'; 

	else:	

		if( mysqli_num_rows($res) > 0):
		echo "Username already exists within the database...\n\nPlease try again."; 

			 
		elseif ( !strcmp($_POST['password1'],$_POST['password2']) ):
			 
			$res =mysqli_query($connection, "INSERT INTO users VALUES ('".$_POST["username"] ."','".$_POST["password1"]."')");
	
			echo $_POST['username'].", Welcome to sports database!";
	
?>
				
			<html>
				<p>Click <a href='query.php' >here</a>	to enter our Query page.</p>
			</html>


<?php	

		else :
			echo "Passwords do no match please try again...";
		endif; 
	endif;
?>			