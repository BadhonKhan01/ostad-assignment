<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
	<h1>Register</h1>
	<form action="register.php" method="post" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>

		<label for="profile_picture">Profile Picture:</label>
		<input type="file" name="profile_picture" required><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
