<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>




    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="">

    <link rel="stylesheet" href="css/style.css" class="">


</head>
<body>
      
<section class="header">

    <a href="home.php" class="logo">travel.</a>    

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="contact.php">contact</a>
        <a href="adminpage.php">admin</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="form">
    <h1>Admin Login</h1>
    <form action="login.php" method="post">
		  <label for="username">Username:</label>
		  <input type="text" id="username" name="username" required>
		  <br>
		  <label for="password">Password:</label>
		  <input type="password" id="password" name="password" required>
		  <br>
		  <input class="btn" type="submit" value="Login">
	</form>
</div>



<section class="footer">
    <div class="box-container">

        <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Home</a>
        </div>

    
        <div class="box">
        <h3>extra links</h3>
        <a href=""> <i class="fas fa-angle-right"></i>ask question</a>
        <a href=""> <i class="fas fa-angle-right"></i>about us</a>
        <a href=""><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href=""><i class="fas fa-angle-right"></i>ToS</a>
        </div>

        <div class="box">
        <h3>contact info</h3>
        <a href=""> <i class="fas fa-phone"></i>666-666-666</a>
        <a href=""> <i class="fas fa-envelope"></i>random@email.com</a>
        <a href=""> <i class="fas fa-map"></i> Dhaka, Bangladesh</a>
         </div>

    </div>


</section>





<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>