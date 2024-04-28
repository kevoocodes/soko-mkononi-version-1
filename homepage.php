<?php include("includes/config.php"); ?>
<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="Kelvin Aron Msindai" content="Fullstack-developer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOKO MKONONI</title>

    <link rel="icon" href="assets/images/logo/soko2.png" type="image/x-icon">
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- FONTS LINKS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Pacifico&display=swap" rel="stylesheet">

    <style>
        .register {
            position: absolute;
            min-width: 140px;
            right: 70px;
            text-transform: capitalize;
        }

        .register a {
            text-decoration: none;
            color: #000;
            padding: 10px;
        }


        .register ul li {
            list-style: none;

        }


        .register ul li ul li {
            display: none;
            padding: 5px 0;
            background-color: #f2f2f2;
        }



        .register ul li a:hover {
            background-color: #f2f2f2;
            color: #4cbb17;
            padding: 10px;
        }

        .register ul li:hover ul li {
            display: block;
            padding: 10px;
        }

        .register ul li ul li a:hover {
            background-color: transparent;
            color: #4cbb17;
        }

        .register img {
            width: 40px;
        }
    </style>



</head>

<body>

    <!-- TOP NAVIGATION -->
    <section id="search" class="search">
        <div class="max-width">
            <div class="search-content">
                <div class="heading">
                    <h1><a href="index.php"><img src="assets/images/logo/soko2.png" alt=""></a></h1>
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
                        <li><a href="contact.php">Contact us </a></li>
                    </ul>
                </div>

                <div class="register">
                    <ul>
                        <li> <a href="">Welcome <?php echo $username; ?> <img src="assets/images/icons/down.png" alt=""> </a>
                            <ul>
                                <li><a href="account.php">My Account</a></li>
                                <li><a href="cart.php">My Cart</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!-- HOME SECTION -->
    <section id="home" class="home">
        <div class="max-width">
            <div class="home-content">
                <div class="home-one">
                    <div class="slideshow-container">

                        <div class="mySlides fade">

                            <img src="assets/images/png/bg1.jpg" style="width:100%">
                            <div class="text">
                                <p>Agiza upate punguzo la <br> 15%</p>
                                <a href="http://">Shop</a>

                            </div>
                        </div>

                        <div class="mySlides fade">

                            <img src="assets/images/bg/bg4.jpg" style="width:100%">
                            <div class="text">
                                <p>Agiza upate punguzo la <br> 15%</p>
                                <a href="http://">Shop</a>

                            </div>
                        </div>

                        <div class="mySlides fade">

                            <img src="assets/images/bg/bg3.jpg" style="width:100%">
                            <div class="text">
                                <p class="home-content-p">Agiza upate punguzo la <br> 15%</p>

                                <a href="http://">Shop</a>

                            </div>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                    <br>
                    <!--                             
                            <div style="text-align:center">
                              <span class="dot" onclick="currentSlide(1)"></span> 
                              <span class="dot" onclick="currentSlide(2)"></span> 
                              <span class="dot" onclick="currentSlide(3)"></span> 
                            </div> -->
                </div>

                <div class="home-two">
                    <div class="home-two-one">
                        <div class="home-two-text">
                            <p>Bidhaa Pendwa</p>
                            <ul>
                                <li><a href="">
                                        <p>Mchele</p> <img src="assets/images/icons/right.png" alt="">
                                    </a></li>
                                <li><a href="">
                                        <p>Maharage</p> <img src="assets/images/icons/right.png" alt="">
                                    </a></li>
                                <li><a href="">
                                        <p>Unga</p> <img src="assets/images/icons/right.png" alt="">
                                    </a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="home-two-two">
                        <div class="home-two-text">
                            <p>Lists by categories</p>
                            <ul>
                                <li><a href="">
                                        <p>Viungo vya mboga</p> <img src="assets/images/icons/right.png" alt="">
                                    </a></li>
                                <li><a href="">
                                        <p>Matunda</p> <img src="assets/images/icons/right.png" alt="">
                                    </a></li>
                                <li><a href="">
                                        <p>Samaki</p> <img src="assets/images/icons/right.png" alt="">
                                    </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="zipendwazo" id="zipendwazo">
        <div class="max-width">
            <h2 class="">Zipendwazo</h2>
            <div class="zipendwazo-content">
                <div class="card">
                    <div class="box">
                        <img src="assets/images/png/rice.png" alt="">
                        <h5>Mchele</h5>
                        <h4>1000 Tsh</h4>
                        <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="assets/images/png/beans.png" alt="">
                        <h5>Maharage</h5>
                        <h4>1000 Tsh</h4>
                        <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="assets/images/png/maize.png" alt="">
                        <h5>Unga wa Mahindi</h5>
                        <h4>1000 Tsh</h4>
                        <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="assets/images/png/nyama1.png" alt="">
                        <h5>Nyanya ya Ng'ombe</h5>
                        <h4>1000 Tsh</h4>
                        <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>


            </div>

        </div>
    </section>


    <section id="ofa" class="ofa">
        <div class="max-width">
            <h2 class="title">Ofa za leo</h2>
            <div class="ofa-content">
                <div class="card">
                    <center>
                        <img src="assets/images/png/banana1.png" alt="">
                        <h4>Ndizi sukari</h4>
                        <p>Tsh 1000 <span><strike>Tsh 2000</strike></span></p>
                    </center>
                </div>

                <div class="card">
                    <center>
                        <img src="assets/images/png/nyama2.png" alt="">
                        <h4>Nyama Freshi</h4>
                        <p>Tsh 6000 <span><strike>Tsh 7000</strike></span></p>
                    </center>
                </div>

                <div class="card">
                    <center>
                        <img src="assets/images/png/fish2.png" alt="">
                        <h4>Samaki Sato</h4>
                        <p>Tsh 9000 <span><strike>Tsh 10000</strike></span></p>
                    </center>
                </div>

                <div class="card">
                    <center>
                        <img src="assets/images/png/potato1.png" alt="">
                        <h4>Viazi Mbatata</h4>
                        <p>Tsh 2000 <span> <strike>Tsh 3000</strike> </span></p>
                    </center>
                </div>



                <div class="card">
                    <center>
                        <img src="assets/images/png/watermelon2.png" alt="">
                        <h4>Tikiti Maji</h4>
                        <p>Tsh 3000</span></p>
                    </center>
                </div>
            </div>
        </div>

    </section>


    <!-- KIFURUSHI -->
    <section id="kifurushi" class="kifurushi">
        <div class="max-width">
            <h2 class="title">kifurushi</h2>
            <div class="kifurushi-content">
                <div class="card">

                    <div class="box">
                        <img src="assets/images/png/24646-6-vegetable-photos.png" alt="">
                        <h4>Mboga za majani</h4>
                        <p>Mchicha,vitunguu maji viwili,limao,nyanya,viutnguu swaumu</p>

                        <p>Tsh 3000</p>
                        <div class="box-link">
                            <a href="" class="view">View</a> <a href="" class="cart">Add to Cart</a>
                        </div>
                    </div>

                </div>

                <div class="card">

                    <div class="box">
                        <img src="assets/images/png/3-2-fruit-picture.png" alt="">
                        <h4>Matunda mchanganyiko</h4>
                        <p>Maembe,Tikiti maji,machenz,chungwa,ndizi kisukari,zabibu</p>
                        <p>Tsh 3000</p>
                        <div class="box-link">
                            <a href="" class="view">View</a> <a href="" class="cart">Add to Cart</a>
                        </div>
                    </div>

                </div>

                <div class="card">

                    <div class="box">
                        <img src="assets/images/png/4-2-fruit-png-image.png" alt="">
                        <h4>miksa</h4>
                        <p>Mchicha,vitunguu maji viwili,limao,nyanya,viutnguu swaumu</p>
                        <p>Tsh 3000 </p>
                        <div class="box-link">
                            <a href="" class="view">View</a> <a href="" class="cart">Add to Cart</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>


    <!-- BIDHAA LEO -->
    <section id="bidhaa-leo" class="bidhaa-leo">
        <div class="max-width">
            <h2>Bidhaa Leo</h2>
            <div class="bidhaa-content">
                <div class="bidhaa-section-two">
                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/bilinganya.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Bilinganya</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/avocado.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Avocado</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/carrot1.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Carot</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/potato.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Viazi Mbatata</p>
                        </div>
                    </div>


                </div>

                <div class="bidhaa-section-one">
                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/lemon1.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Limao</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/redchilli1.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Pili Pili</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/strawberry.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Strawberry</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <img src="assets/images/png/spinach1.png" alt="">
                            <h4>1000 Tsh</h4>
                            <p>Spinach</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


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
                            <li><input type="submit" value="OK"></li>
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



    <!-- JAVASCRIPT LINKS -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>