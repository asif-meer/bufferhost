<link rel="shortcut icon" type="image/png" href="images/fevicon.png">

    <!-- ================================================================
        ***CSS File***
    ================================================================= -->
    <!-- ================= *** Google Font-Poppins *** ======================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- ================= *** Animate CSS *** ======================= -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Bootstrap CSS *** ===================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Font-awesome CSS *** ================== -->
    <link href="css/hover-min.css" rel="stylesheet" type="text/css">

    <!-- ================= *** icofont CSS *** ======================= -->
    <link href="css/icofont.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Owl Carousel CSS *** ================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!-- ================= *** Main CSS *** ========================== -->

    <link href="css/custom/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
    <div id="preloader">
        <div class="preloader_spinner"></div>
    </div>
    <!-- preloader end -->
<!-- ==========================================================
    1.*Header_area start
============================================================ -->
    <header>
        <div class="romana_header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                       <!--  <div class="romana_header_top_left">
                            <ul class="lang">
                                <li data-code="bn">bengali</li>
                                <li data-code="ar">aribic</li>
                                <li data-code="da">dansk</li>
                            </ul>
                            <div class="language_option"><span class="">english</span><i class="icofont icofont-caret-down"></i> </div>
                            <a href="#" class="hidden-xs"><i class="icofont icofont-phone"></i>+256-755-810205</a>
                        </div> -->
                    </div>
                    <!-- column End -->
                    <!-- column End -->
                    <div class="col-md-2 col-xs-6 col-md-offset-7">
                        <div class="romana_header_top_right hidden-xs">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-skype"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            </ul>
                        </div>
                        <div class="romana_client_btn  romana_client_btn_small hidden-sm hidden-md hidden-lg">
                            <a href="#"><i class="icofont icofont-user-alt-3"></i>Client Area</a>
                            <div class="romana_client_log_in">
                                <form action="#" class="romana_client_log_in_after">
                                    <input type="text" name="clientEmail" placeholder="Email here">
                                    <input type="text" name="clientPass" placeholder="password">
                                    <input type="submit" value="Login" >
                                    <p> or <a href="registration.html">registration</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- Header-Top End -->
        <div class="romana_header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-6">
                        <div class="romana_logo">
                            <a href="index-2.html"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only"></span>
                                <i class="icofont icofont-navigation-menu"></i>
                            </button>
                        </div>
                        <nav id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li <?php echo ($page == 'home') ? "class='active'" : ""; ?>><a href="index.php">Home</a></li>
                                <li <?php echo ($page == 'about') ? "class='active'" : ""; ?>><a href="about.php"> about</a></li>
                                <li <?php echo ($page == 'hosting') ? "class='active'" : ""; ?>><a href="hosting.php">hosting</a></li>
                                <li <?php echo ($page == 'domain') ? "class='active'" : ""; ?>><a href="domain.php">domain</a></li>
								 <li <?php echo ($page == 'service') ? "class='active'" : ""; ?>><a href="service.php">Services </a></li>
                                
                                
                                <li <?php echo ($page == 'contact') ? "class='active'" : ""; ?>><a href="contact.php">Contact</a></li>
                            </ul>
                            <!-- mega-menu End -->
                        </nav>
                        <!-- nav End -->
                    </div>
                    <!-- column End -->
                    <div class="col-sm-2">
                        <div class="romana_client_btn hidden-xs">
                            <a href="#" class="hvr-bounce-to-right"><i class="icofont icofont-user-alt-3"></i>Client Area</a>
                        </div>
                        <div class="romana_client_log_in">
                            <form action="#" class="romana_client_log_in_after">
                                <input type="text" name="clientEmail" placeholder="Email here">
                                <input type="text" name="clientPass" placeholder="password">
                                <input type="submit" value="Login">
                                <p> or <a href="registration.html">registration</a></p>
                            </form>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- Header Bottom End -->
    </header>
    <!-- Header End -->