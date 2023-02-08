<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css//elegant-icons.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/nice-select.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/slicknav.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" type="text/css">  
    <link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle.css"); ?>" type="text/css">
    <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>

</head>

<body>

    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->



    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> takalo@takolo.mg</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="header__top__right">

                            <div class="header__top__right__language">
                                <img src="" alt="">
                                <div>
                                   <a href="<?php echo site_url("objetcontroller/homepage") ?>" class="text-decoration-none" style="color:black">
                                        Home
                                   </a>
                                </div>
                            </div>

                            <div class="header__top__right__language">
                                <img src="" alt="">
                                <div>
                                   <a href="<?php echo site_url("objetcontroller/allmyobjet") ?>" class="text-decoration-none" style="color:black">
                                        Profile
                                   </a>
                                </div>
                            </div>


                            <div class="header__top__right__language">
                                <img src="" alt="">
                                <div>
                                   <a href="<?php echo site_url("objetcontroller/allsent") ?>" class="text-decoration-none" style="color:black">
                                        Sent
                                   </a>
                                </div>
                            </div>


                            <div class="header__top__right__language">
                                <img src="" alt="">
                                <div>
                                   <a href="<?php echo site_url("objetcontroller/allreceived") ?>" class="text-decoration-none" style="color:black">
                                        Received
                                   </a>
                                </div>
                            </div>


                            <div class="header__top__right__language">
                                <img src="" alt="">
                                <div>
                                   <a href="<?php echo site_url("objetcontroller/allchange") ?>" class="text-decoration-none" style="color:black">
                                        Accepted/Refused
                                   </a>
                                </div>
                            </div>

                            <div class="header__top__right__language">
                                <img src="" alt="">
                                <div>
                                   <a href="<?php echo site_url("objetcontroller/addnewobjetpage") ?>" class="text-decoration-none" style="color:black">
                                        + Add object
                                   </a>
                                </div>
                            </div>
                            
                            
                            <div class="header__top__right__auth">
                                <a href="<?php echo site_url('membrelogin/deconnexion'); ?>"><i class="fa fa-user"></i> Deconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href=""><img src="#" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

      <!-- Hero Section Begin -->
      <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class= "col-lg-2">
                    <img src="#" alt="" style="90%">
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <a href="main.php?page=host/multicritary">
                                <form action="#" method="get">
                                    <input type="text" placeholder="What do yo u need?" name="search">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </a>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>031 78 789 36</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>