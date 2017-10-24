</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.min.css" rel="stylesheet">
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" type="text/css" rel="stylesheet">



</head>

<body class="body">
    <div>
        <div class="top-bg-color">
            <div class="ico">
                <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
            </div>
            <div>
                
                <button type="button" class="login-but"><a href="login-page.php">LOGIN</a></button>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="#home" class="h">HOME</a>
                <a href="#rooms" class="h">ROOMS OFFER</a>
                <a href="#contact" class="h">CONTACT US</a>
                <a href="#booking" class="h">BOOK NOW</a>
            </div>
        </div>

        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>

            <ul class="uk-slideshow-items">
                <li>
                    <img src="Images/Greatness.jpg" alt="" uk-cover>
                </li>
                <li>
                    <img src="Images/Relax.jpeg" alt="" uk-cover>
                </li>
                <li>
                    <img src="Images/Experience.jpeg" alt="" uk-cover>
                </li>
                <li>
                    <img src="Images/Youth.jpeg" alt="" uk-cover>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>


    </div>
    <script src="UIKIT/js/uikit.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="UIKIT/js/uikit-icons.min.js"></script>

</body>

</html>