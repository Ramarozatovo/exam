<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css//elegant-icons.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/nice-select.cs"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/slicknav.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" type="text/css">  
    <link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle.css"); ?>" type="text/css">

    <title>Login</title>
</head>
<body class="bod">

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="wrapperl" >
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card bg-light text-secondary" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                                <form action="<?php echo site_url("membrelogin/addnewuser") ?>" method="POST" class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" class="form-control" name = "email" required/>
                                            <label class="form-label" >Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" class="form-control" name = "name" required/>
                                            <label class="form-label" >Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password"  class="form-control" name = "mdp" required/>
                                            <label class="form-label" >Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button class="btn btn-primary btn-lg" style = "width:100%">Register</button>                    
                                    </div>
                                </form>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <a href="<?php echo site_url("membrelogin") ?>">
                                        <button class="btn btn-primary btn-lg" style = "width:100%">Previous</button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="#"
                                class="img-fluid" style="border-radius: 30px; margin-right:auto; margin-left:auto" alt="Sample image">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Js Plugins -->
    <script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.nice-select.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-ui.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.slicknav.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/mixitup.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/owl.carousel.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
</body>
</html>