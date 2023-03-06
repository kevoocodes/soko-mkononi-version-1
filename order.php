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
       <link rel="stylesheet" href="assets/css/order.css">



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
            <div class="navigation-content">
                <div class="link">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>

                <div class="register">
                    <a href="register.html" class="button-click">Register</a>
                </div>
            </div>
        </div>
    </section>

     <!-- ABOUT IMAGE -->
     <section class="about-image" id="about-image">
        <div class="max-width">
            <h2>Delivery</h2>
        </div>
    </section>

    


    <section class="register-login" id="register-login">
        <div class="max-width">
            <div class="register-content">

                <h3>Delivery Form</h3>
               
                <form action="" method="POST">
                    <div class="abc">
                        <p>Hii fomu inakusaidia kufikisha bidhaa yako ulipo,Tafadhari jaza taarifa sahihi</p>
                    </div>

                   <div class="customer-infomation">
                        <p class="customer">Customer Infomation</p>
    
                        <div class="abc">
                            <input type="text" placeholder="Enter Fullname">
                        </div>

                        <div class="abc">
                            <input type="email" placeholder="Email">
                        </div>

                        <div class="abc">
                            <input type="text" placeholder="Phonenumber">
                        </div>

                        <div class="abc">
                            <input type="text" placeholder="Street Address">
                        </div>

                        <div class="abc">
                            <input type="text" placeholder="Postal/Zipcode">
                        </div>


                   </div>

                   <div class="payment-information">
                    <p class="customer">Payment Method</p>
                       <div class="ab">
                            <ul>
                                <li><input type="radio" name="" id=""><img src="assets/images/logo/images.jpeg" alt=""> <p class="pesa">M PESA</p></li>
                                <li><input type="radio" name="" id=""><img src="assets/images/logo/tigo.png" alt="" id="tigo"> <p class="pesa">TIGO PESA</p> </li>
                                <li><input type="radio" name="" id=""><img src="assets/images/logo/aitel.png" alt="" id="airtel"><p class="pesa" >AIRTEL MONEY</p></li>
                                <li><input type="radio" name="" id=""><img src="assets/images/logo/HALO.png" alt=""  id="hallo"><p class="pesa">HALOPESA</p></li>
                            </ul>
                       </div>
                   </div> 

                   
                <div class="abc">
                    <input type="submit" name="submit" value="Order" class="button-click">
                </div>

                    <!-- <p><a href="register.html">Not a member? Signup now</a></p> -->

                    
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
                        <li><a href=""><img src="images/icons/facebook.png" alt=""></a></li>
                        <li><a href=""><img src="images/icons/twitter.png" alt=""></a></li>
                        <li><a href=""><img src="images/icons/insta.png" alt=""></a></li>
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