<?php
session_start();

// validate form inputs
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_FILES['profile_picture'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$profile_picture = $_FILES['profile_picture'];
	
	// check if email is valid
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		die("Invalid email format");
	}
	
	// create unique filename for profile picture
	$timestamp = date('YmdHis');
	$extension = pathinfo($profile_picture['name'], PATHINFO_EXTENSION);
	$profile_picture_filename = 'uploads/' . $timestamp . '.' . $extension;

	// move uploaded file to server and rename it
	move_uploaded_file($profile_picture['tmp_name'], $profile_picture_filename);

	// save user data to CSV file
	$data = array($name, $email, $profile_picture_filename);
	$file = fopen('users.csv', 'a');
	fputcsv($file, $data);
	fclose($file);

	// set cookie with user's name
	setcookie('name', $name, time() + (86400 * 30), "/"); // cookie expires in 30 days

	// redirect to success page
	header('Location: success.php');
	exit;
} else {
	die("All fields are required");
}
?>
