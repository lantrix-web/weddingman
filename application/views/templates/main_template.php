<?php

include '/application/config/routes.php';

$uri = trim($_SERVER['REQUEST_URI'], "/");
foreach ($routes as $uriPattern => $path) {

    if (preg_match("~$uriPattern~", $uri)) {
        $count++;
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

        //Определить какой контроллер
        // и action будут обрабать запрос

        $segments = explode('/', $internalRoute);
        //unset($segments[0]);

        $controller = array_shift($segments);
        break;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Dating Agency Page for men</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#9575cd">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#604895">
    <meta name="msapplication-navbutton-color" content="#604895">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#604895">
    <!-- Custom Browsers Color End -->

    <link rel="stylesheet" type="text/css" href="/css/fonts.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="/css/additional.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.mmenu.all.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/simplelightbox.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.min.css">
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
</head>
<body class="body-start">

<?php
if(($_SERVER['REQUEST_URI']) != '/main' && ($_SERVER['REQUEST_URI'] != '/mans'))
{?>
    <!-- ======================== HEADER START ======================== -->

    <header id="header" class="header  main-header">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-lg-2">

                    <div class="logo">

                        <a href="<?="/profile/".$_SESSION['user']['user_id'] ?>"><img src="/images/logo/profile-logo.png" alt=""></a>

                    </div>

                </div>

                <div class="col-xs-3 col-lg-7">

                    <a class="mob-menu" href="#mobile_menu">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </a>

                    <nav class="nav navbar">

                        <ul class="profile-navigation nav-profile">
                            <li class="nav-item active"><a href="#">search</a></li>
                            <li class="nav-item"><a href="#">services</a></li>
                            <li class="nav-item"><a href="#">about us</a></li>
                            <li class="nav-item"><a href="#">about ukraine</a></li>
                            <li class="nav-item"><a href="#">blog</a></li>
                            <li class="nav-item"><a href="#">travel info</a></li>
                            <li class="nav-item"><a href="#">f&q</a></li>
                            <li class="nav-item"><a href="#">contacts</a></li>

                        </ul>

                    </nav>

                </div>

                <div class="col-xs-9 col-lg-3">

                    <div class="login-wrapper">

                        <div class="data">

                            <span class="ukr-time"><span>UA:</span> 23:45</span>
                            <span class="weather">+25<sup>o</sup></span>

                        </div>

                        <div class="login-data">

                            <span>My profile</span>

                            <div class="login-name">

                                <span class="profile-name"><?= $_SESSION['user']['name'] ?></span>

                            </div>

                            <div class="login-avatar">

                                <!--<a href="/login">--><img class="image-circle responsive-img" src="<?= $_SESSION['user']['avatar'] ?>" alt=""><!--</a>-->

                            </div>

                            <div class="login-data-dropdown hidden">

                                <div class="lg-dropdown-wrapper">

                                    <span>Status: <span class="is-online">online</span></span>

                                    <div class="lg-data-progress">

                                        <div class="progress-bar">

                                            <span>75% full info</span>

                                            <div class="progress-bar-container">
                                                <div class="progress-bar-value value-p"></div>
                                            </div>

                                        </div>

                                    </div>

                                    <ul class="lg-dropdown-menu">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="/profile/edit/<?=$_SESSION['user']['user_id'] ?>">Settings</a></li>
                                        <li><a href="#">Account settings</a></li>
                                    </ul>

                                </div>

                                <div class="lg-dropdown-footer">
                                    <a href="/logout">Log out</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <!-- ======================== HEADER END ======================== -->

<?php } ?>


<?php

require 'application/views/'.$controller.'/'.$content_view.'.php';

?>

<?php
if(($_SERVER['REQUEST_URI']) != '/main' && ($_SERVER['REQUEST_URI'] != '/mans'))
{?>
<!-- ======================== FOOTER START ======================== -->

<footer id="footer" class="page-footer">

    <div class="footer">

        <div class="container">

            <div class="footer-menu">

                <div class="row">

                    <div class="col-lg-2">

                        <ul>
                            <li><a href="#">Travel info</a></li>
                            <li><a href="#">About ukraine</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">promotionals</a></li>
                            <li><a href="#">bookmark page</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2">

                        <ul>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Your Privacy</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Help/F&Q</a></li>
                            <li><a href="#">Contac Us</a></li>
                            <li><a href="#">Profile Assistance</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2">

                        <ul>
                            <li><a href="#">Success Stories</a></li>
                            <li><a href="#">Date ideas</a></li>
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Gifts</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Code of conduct</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-3">

                        <ul>
                            <li><a href="#">Online Dating Safety Tips</a></li>
                            <li><a href="#">International Dating  Advice</a></li>
                            <li><a href="#">Advertise on wifefromukraine</a></li>
                            <li><a href="#">wifefromukraine guarantee</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-3">

                        <div class="social-link text-center">

                            <span>Follow us</span>

                            <ul>
                                <li><a href="#"><img src="/images/fb-icon.png" alt=""></a></li>
                                <li><a href="#"><img src="/images/vk-icon.png" alt=""></a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <div class="all-rights-reserved">

                <div class="row">

                    <div class="col-lg-6 col-lg-offset-3">

                        Copyright ©2016 Ukrainian Wife Agency Limited. All Rights Reserved.

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="copyright-area">

        <div class="container">

            <div class="row">

                <div class="copyright-text lantrix-footer-hover">
                    Designed and Developed by<br>
                    <a href="https://lantrix.com.ua" data-hover="Lantrix" title="Создание сайта - студия Lantrix">Lantrix</a>
                </div>

            </div>

        </div>

    </div>

</footer>

<!-- ======================== FOOTER END ======================== -->
<!-- MOBILE MENU START -->

<nav id="mobile_menu">
    <ul class="navigation-mob">
        <li class="nav-item active"><a href="#">search</a></li>
        <li class="nav-item"><a href="#">services</a></li>
        <li class="nav-item"><a href="#">about us</a></li>
        <li class="nav-item"><a href="#">about ukraine</a></li>
        <li class="nav-item"><a href="#">blog</a></li>
        <li class="nav-item"><a href="#">travel info</a></li>
        <li class="nav-item"><a href="#">f&q</a></li>
        <li class="nav-item"><a href="#">contacts</a></li>
    </ul>
</nav>
<?php } ?>

<!-- MOBILE MENU END -->

<!-- Optimized loading JS Start -->
<!-- Optimized loading JS Start -->
<script>var scr = {"scripts":[
        {"src" : "/js/libs.min.js", "async" : false},
        {"src" : "/js/common.js", "async" : false},
        {"src" : "/js/jquery.validate.js", "async" : false},
        {"src" : "/js/main.js", "async" : false}

    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
<!-- Optimized loading JS End -->
<!-- Optimized loading JS End -->

</body>
</html>
