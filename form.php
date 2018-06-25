<html>
<head><title>Welcome page</title></head>
<body>
<?php
	echo "hello, " . $Username . "!"
	?>
<h2> once you reach this page, you should be able to select between a few options...</h2>
<p> your options will include:
	<ul>
		<li><a href="query.php"> Query </a> our database</li>
		<li>Adding to the database (given the permission)</li>
		<li>etc...</li>
	</ul>
</body>
</html>