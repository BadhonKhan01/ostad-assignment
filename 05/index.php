<?php  
	include_once('process_form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML, Basic OOP, and Superglobal Variables in PHP</title>
</head>
<body>
	<form method="post" action="process_form.php">
	  <label for="name">Name:</label>
	  <input type="text" id="name" name="name" required>
	  
	  <label for="email">Email:</label>
	  <input type="email" id="email" name="email" required>
	  
	  <button type="submit">Submit</button>
	</form>
</body>
</html>