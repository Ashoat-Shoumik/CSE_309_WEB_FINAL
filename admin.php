
<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])){
  
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Admin Panel</title>
</head>
<body>
  <div class="form">
  <h1><center>WELCOME TO ADMIN PANEL</center></h1>
  <a href="logout.php" class="btn">Logout</a>
  <a href="home.php" class="btn">Go back to home</a>

  </div>
</body>
</html>
 
<?php

}
else {
  header("Location: adminpage.php");
  exit();
}


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'book_db';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (!$conn) {
  die('Could not connect to the database: ' . mysqli_connect_error());
}


$sql = 'SELECT * FROM submissions';
$result = mysqli_query($conn, $sql);


echo '<div class="form">';
echo '<h2>Contact Form Submissions</h2>';
echo '<table>';
echo '<tr><th>Name</th><th>Email</th><th>Message</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['email'] . '</td>';
  echo '<td>' . $row['message'] . '</td>';
  echo '</tr>';
}
echo '</table>';
echo '</div>';


$sql = 'SELECT * FROM book_form';
$result = mysqli_query($conn, $sql);


echo '<div class="form">';
echo '<h2>Bookings List</h2>';
echo '<table>';
echo '<tr>
<th>id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Location</th>
<th>Guests</th>
<th>Arrival</th>
<th>Departure</th>

</tr>';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['id'] . '</td>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['email'] . '</td>';
  echo '<td>' . $row['phone'] . '</td>';
  echo '<td>' . $row['address'] . '</td>';
  echo '<td>' . $row['location'] . '</td>';
  echo '<td>' . $row['guests'] . '</td>';
  echo '<td>' . $row['arrival'] . '</td>';
  echo '<td>' . $row['departure'] . '</td>';
  echo '</tr>';
}
echo '</table>';
echo '</div>';





mysqli_close($conn);
?>
