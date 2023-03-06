<?php
include("includes/config.php"); //connection to the database
include("includes/form_handlers/login_handler.php"); //login handlers

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="Kelvin Aron Msindai" content="Fullstack-developer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOKO MKONONI</title>

       <!-- CSS LINKS -->
       <link rel="stylesheet" href="assets/css/style.css">
       <link rel="stylesheet" href="assets/css/about.css">
       <link rel="stylesheet" href="assets/css/contact.css">
       <link rel="stylesheet" href="assets/css/register.css">



       <!-- FONTS LINKS -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Lato&family=Pacifico&display=swap" rel="stylesheet">

      <style>         
            .error {
                padding: 5px 30px 5px 30px;
                color: #88C000;
                font-size: 12px;
            }
      </style>
</head>
<body>
      <!-- TOP NAVIGATION -->
      <section id="search" class="search">
        <div class="max-width">
            <div class="search-content">
                <div class="heading">
                    <a href="index.php"><img src="assets/images/logo/soko2.png" alt=""></a>
                </div>

                <div class="search-input">
                    <input type="text" src="assets/images/icons/search.png" placeholder="Search..">
                    <div id="button-holder">
                        <img src="assets/images/icons/search.png" alt="">
                    </div>
                </div>

                <div class="button-wish">
                    <img src="assets/images/icons/wishlist.png" alt="">
                    <img src="assets/images/icons/cart.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- SECOND NAVIGATION -->
    <section id="navigation" class="navigation">
        <div class="max-width">
            <div class="navigation-content">
                <div class="link">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>

                <div class="register">
                    <a href="register.php" class="button-click">Register</a>
                </div>
            </div>
        </div>
    </section>

     <!-- ABOUT IMAGE -->
     <section class="about-image" id="about-image">
        <div class="max-width">
            <h2>login </h2>
        </div>
    </section>


    <section class="register-login" id="register-login">
        <div class="max-width">
            <div class="register-content">

                <h3>User Login</h3>
                <div class="error">
                      <?php if(in_array("Username or password was incorrect", $error_array)) echo  "Username or password was incorrect"; ?>
                </div>
                <form action="" method="POST">
                    <div class="abc">
                        <input type="text" name="username" placeholder="Enter your username">
                    </div>

                

                    <div class="abc">
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    
                    <div class="abc">
                        <input type="submit" name="login" value="LOGIN" class="button-click">
                    </div>

                    <p><a href="register.php">Have not an Accont? Please Register</a></p>

                    
                </form>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        <div class="max-width">
            <div class="footer-content">
                <div class="footer-link">
                    <ul>
                        <li><a href="">Aboutus</a></li>
                        <li><a href="">Contactus</a></li>
                        <li><a href="">Term & condition</a></li>
                    </ul>
                </div>

               

                <div class="subscriber">
                    <h4>Subscriber to our newleteer</h4>
                    <form action="">
                        <ul>
                            <li><input type="text" placeholder="Email Address"></li>
                            <li><input type="submit"  value="OK"></li>
                        </ul>  
                        
                    </form>
                </div>

                <div class="address">
                    <p>497 Posts Rd. Azikiwe, CA 95673</p>
                    <p>+255 678 299 377</p>
                    <p>Sokonyumbani@gmail.com</p>
                </div>

                <div class="social-media">
                    <ul>
                        <li><a href=""><img src="assets/images/icons/facebook.png" alt=""></a></li>
                        <li><a href=""><img src="assets/images/icons/twitter.png" alt=""></a></li>
                        <li><a href=""><img src="assets/images/icons/insta.png" alt=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="developer-signature">
                <h6>Developed by @kevoocodes</h6>
            </div>
        </div>
    </footer>

</body>
</html>