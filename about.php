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

                    <a href="index.html">
                        <h1><img src="assets/images/logo/soko2.png" alt=""></h1>
                    </a>
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
                        <li><a href="index.php">Home</a></li>
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
            <h2>About us</h2>
        </div>
    </section>

    <section class="about-text" id="about-text">
        <div class="max-width">
            <div class="abouts-content">
                <div class="abouts-text">
                    <p><span>Soko Mkononi</span> ni huduma inayokupa fursa ya kufanya maamuzi ya nini,wakati gani na kwanini ule, mahali popote ulipo kwa kutumia kifaa chako ukipendacho cha mawasiliano</p>

                    <p>ifanye pesa yako ya thamani zaidi na soko mkononi, ni sarafu ile ile iliokupa bando la siku, fanya ikupe chakula bora chenye mboga mboga na matunda ya chaguo lako, imarisha afya pia epuka gharama na adha ya kwenda na kurudi sokoni, jifanyie maisha yenye thamani kwa gharama nafuu </p>

                    <p>soko mkononi inakupa huduma ya kufanya manunuzi ya jumla na reja reja kwa ajili mahitaji ya nyumbani na mengine. Soko mkononi inakupa ofa za mapunguzo ya bei,bidhaa pendwa, machaguo ya bidhaa mbalimbali na vifurushi vya pamoja. Kamilsha mahitaji yako yote ukiwa nyumbani,kazini au hata barabarani yaani soko mkononi mwako </p>

                    <p>weka oda ya bidhaa ya chaguo lako, ongeza idadi ya machaguo yako katika orodha yako pendwa, weka ukipendacho kapuni. Gharama na picha za bidhaa zote zimewekwa pamoja. Tembea na soko mkononi mwako.</p>
                </div>

                <div class="abouts-image">
                    <img src="assets/images/png/24646-6-vegetable-photos.png" alt="">
                </div>
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