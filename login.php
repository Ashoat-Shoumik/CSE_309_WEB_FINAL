<?php

session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $host = "localhost";
    $user = "root";
    $password_db = "";
    $database = "book_db";
    $connection = mysqli_connect($host, $user, $password_db, $database);


    if (!$connection) {
        echo "connection Failed";
    }


    $query = "SELECT * FROM admin_cred WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);


    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if($row['username']=== $username && $row['password'] === $password) {
            echo "logged In";

            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['logged_in'] = true;

            header('Location: admin.php');
            exit();
        }
        else {
            header("Location: index.php?error=Incorrect username or password");
            exit();
        }
    } else {
        echo "Invalid username or password";
        header("Location: adminpage.php");
        exit();
    }
}
