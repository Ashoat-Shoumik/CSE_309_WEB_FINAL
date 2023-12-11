<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>




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
        <a href="book.php">Book</a>
        <a href="contact.php">contact</a>
        <a href="admin.php">admin</a>


    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- header section ends  -->

<div class="heading" style="background:url(images/home-slide-1.jpg) no-repeat">
    <h1>book now</h1>
</div>
  
<!-- booking section start  -->

<section class="booking">

    <h1 class="heading-title">book your trip</h1>

    <form action="book_form.php" method="post" class="book-form" onsubmit="myFunction()">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your phone" name="phone" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="how many guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrival :</span>
                <input type="date" name="arrival">
            </div>
            <div class="inputBox">
                <span>departure :</span>
                <input type="date" name="departure">
            </div>

        </div>
        
        <input type="submit" value="submit" class="btn" name="send">
        
    </form>

    <script>
function myFunction() {
  alert("The form was submitted");
}
</script>

</section>




<!-- Footer Section -->

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

<div class="heading">
    <h1>Book Now</h1>
</div>





<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>