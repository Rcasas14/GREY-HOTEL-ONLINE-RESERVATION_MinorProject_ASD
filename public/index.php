<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="../tes-css.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/footer-distributed.css" rel="stylesheet" type="text/css">
</head>


<body class="body">
    <div class="body-inline">
        <div class="top-bg-color">

            <div class="ico">
                <a href="index.php"><img src="Images/logo.png" alt="Grey Hotel" class="ico-image"></a>
            </div>
         
            <div class="topnav" id="myTopnav">
                <div class="dropdown">
                    <p class="nav-text"><a href="index.php" class="link-head-text" uk-scroll>HOME</a></p>
                    <div class="dropdown-content">
                        <a href="#about-hotel" uk-scroll>About Grey Hotel</a>
                        <a href="#contact" uk-scroll>Contact Us</a>
                    </div>
                </div>

                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
                <p class="nav-text"><a href="reserve.php" class="link-head-text">RESERVE NOW</a></p>                
            </div>  

        </div>

        <div class="slideshow-container">
            <figure>
                <img src="Images/Greatness.png">
                <img src="Images/Relax.png">
                <img src="Images/Experience.png">
                <img src="Images/Youth.png">
            </figure>
            <a href="#about-hotel" uk-scroll><img src="Images/scroll_down.png" class="scroll-ico moving-down">
            </a>
        </div>

        <br>
        <br>

        <div class="About-hotel-container" id="about-hotel">
            <center><p class="About-greyHotel">ABOUT GREY HOTEL</p></center>
            <center><p class="grey-hotel-dav">GREY HOTEL DAVAO</p></center>
            <div class="grey-hotel-image">
                <center><img src="Images/Grey-Hotel.png" class="grey-img"></center>
            </div>
            <br>
            <p class="aboutHotel-temp-content " style="text-indent: 50px;"><center><b><span style="font-size:25px;">Welcome to the Grey Hotel, where you can experience greatness, relaxation, and youthfulness!</span></b></center><br>

<span style="text-align:justify; font-size:18px;">Complete your perfect stay in Davao City with Grey Hotel and its great experience. Grey hotel is located in the heart of Davao, where peace and modern city life can be found. 
Feel at home in our rooms and suites which are elegantly designed with Filipino and a touch of Western styles.  With its 5-storey building design and structure and 9 elegant guest rooms and suites offered, we can assure that guests can enjoy their privacy and solitude. All rooms are also equipped with broadband internet and other amenities.

Grey Hotel can also be a great venue for meetings and seminars with its versatile function halls equipped with modern technologies needed. 

From the airport, Grey Hotel is just 12 kms away and can be reach with 20-minute drive by car.</p></span>
        </div>
    </div>


    <div id="contact">
        <footer class="footer-distributed">

            <div class="footer-right">
                <a href="#"><i class="fa fa-facebook"><img src="images/facebook_logo.png" > </i></a>
                <a href="#"><i class="fa fa-twitter"><img src="images/twitter_logo.png" ></i></a>
                <a href="#"><i class="fa fa-email"><img src="images/email_logo.png" style="height: 50px; width:50px;"></i></a>
                <a href="#"><i class="fa fa-linkedin"><img src="images/linkedin_logo.png" style="height: 38px; width:60px;"></i></a>
            </div>

            <div class="footer-left">
                <p class="footer-links">
                    <a href="index.php" uk-scroll>Home</a>.
                    <a href="#">Pricing</a> .
                    <a href="#about-hotel">About</a> .
                    <a href="#">Contact</a> .
                </p>
                <p>Grey Hotel &copy; 2017</p>
            </div>

        </footer>
    </div>

    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>


</body>

</html>