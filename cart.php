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
       <link rel="stylesheet" href="assets/css/cart.css">


       <!-- JAVASCRIPT LINKS -->
       <script src="js/plusminus.js"></script>



       <!-- FONTS LINKS -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=Lato&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
      <!-- TOP NAVIGATION -->
      <section id="search" class="search">
        <div class="max-width">
            <div class="search-content">
                <div class="heading">
                    
                    <a href="index.html"><h1><img src="assets/images/logo/soko2.png" alt=""></h1></a>
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
            <div class="navigation-content" id="myTopnav">
                <div class="link">
                    <ul>
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>

                <div class="register">
                    <a href="register.html" class="register-link">Register</a>
                    <!-- <a href="javascript:void(0);" onclick="myFunction()"><img src="images/icons/menu.png" alt=""></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT IMAGE -->
    <section class="about-image" id="about-image">
        <div class="max-width">
            <h2>Your Order</h2>
        </div>
    </section>



    <section class="cart">
        <div class="max-width">
            <div class="cart-info">
                <h4>There are 3 item(s) in your cart</h4>
            </div>

            <div class="cart-content">
                <div class="cart-content-card">
                    <div class="cart-delete">
                        <img src="assets/images/icons/waste.png" alt="">
                    </div>
    
                    <div class="cart-image">
                        <div class="cart-image-image">
                            <img src="assets/images/png/orange.png" alt="">
                        </div>
                    </div>
    
                    <div class="cart-heading">
                        <h3>Chungwa Tamu</h3>
                    </div>
    
                    <div class="cart-plus-minus">
                         <ul>
                             <li class="minus">-</li>
                             <li>1</li>
                             <li class="add">+</li>
                         </ul>
                    </div>
    
                    <div class="cart-money">
                        <p>1000 Tsh.</p>
                    </div>
                </div>

                <div class="cart-content-card">
                    <div class="cart-delete">
                        <img src="assets/images/icons/waste.png" alt="">
                    </div>
    
                    <div class="cart-image">
                        <div class="cart-image-image">
                            <img src="assets/images/png/avocado.png" alt="">
                        </div>
                    </div>
    
                    <div class="cart-heading">
                        <h3>Parachichi</h3>
                    </div>
    
                    <div class="cart-plus-minus">
                         <ul>
                             <li class="minus">-</li>
                             <li>1</li>
                             <li class="add">+</li>
                         </ul>
                    </div>
    
                    <div class="cart-money">
                        <p>1000 Tsh.</p>
                    </div>
                </div>

                <div class="cart-content-card">
                    <div class="cart-delete">
                        <img src="assets/images/icons/waste.png" alt="">
                    </div>
    
                    <div class="cart-image">
                        <div class="cart-image-image">
                            <img src="assets/images/png/tomato.png" alt="">
                        </div>
                    </div>
    
                    <div class="cart-heading">
                        <h3>Nyanya</h3>
                    </div>
    
                    <div class="cart-plus-minus">
                         <ul>
                             <li class="minus">-</li>
                             <li class="quantity">1</li>
                             <li class="add">+</li>
                         </ul>
                    </div>
    
                    <div class="cart-money">
                        <p>1000 Tsh.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="cart-total" id="total">
        <div class="max-width">
            <h3> Jumla: <span>3000 Tsh </span></h3>
        </div>
    </section>

    <section class="cart-button" id="cart-button">
        <div class="max-width">
            <div class="cart-button-content">
                <ul>
                    <li><a href="" class="checkout">Checkout</a> </li>
                    <li>  <a href="" class="buy">Buy Now</a></li>   
                </ul>
  
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


    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>
</body>
</html>