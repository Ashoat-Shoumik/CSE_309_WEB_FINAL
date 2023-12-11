<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO submissions (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
	// echo "Thank you for your submission!";
	header ('location:contact.php');
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
