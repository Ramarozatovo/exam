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
                        <a ><img src="#" alt=""></a>
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
                            <a data-bs-toggle="modal" data-bs-target="#staticBackdropRes">
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

         <!-- DIV FOR EXCHANGE / MODAL --> 
         <div class="modal fade" id="staticBackdropRes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">
                                Research your object here
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                        </div>

                        <div class="modal-body">
                            <form action="<?php echo site_url("objetcontroller/researchobject") ?>" method="get">
                                <div class="d-flex flex-column border border-1 justify-content-center">
                                    <p class="text-center">Key-words: <input type="text" name="keyword"></p>
                                    <p class="text-center">Choose between those categories:</p>
                                    <p class="justify-content-center" style="margin-left:200px">
                                        <select name="categorie" class="form-control form-control-lg">
                                        <option value="0" selected> All options</option>
                                            <?php for($k = 0; $k < count($categorie); $k++){ ?>
                                                
                                                <option value="<?php echo $categorie[$k]['idcategorie']; ?>">
                                                    <?php echo $categorie[$k]['nomcategorie']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </p>
                                    
                                    <p class="text-center"><input type="submit" class="btn btn-primary" value="Research"></p>
                                </div>
                            </form>       
                        </div>
                        <div class="modal-footer justify-content-center">

                        </div>
                    </div>
                </div>
            </div>
    </section>