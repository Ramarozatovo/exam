<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$case = $this->uri->segment(3);

if(isset($case)){
    echo $case;
}
?>

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

    <title>Takalo</title>
</head>
<body class="bod">

    <!--<div id="preloder">
        <div class="loader"></div>
    </div>-->

    <div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url("assets/img/logo.jpeg") ?>" alt="Not found">
        </div>
        <div class="text-center mt-6 name">
            Takalo
        </div>
        <?php 
            if(isset($case) && $case == 1){ ?>
                <span style="color:blue;" class="text-center">
                    Register succesfull
                </span>
            <?php }
            if(isset($case) && $case == 2){ ?>
            <span style="color:red" class="text-center">
                Error on login
            </span>
        <?php } ?>

        <form class="p-3 mt-3" method="POST" action="<?php echo site_url('membrelogin/checkuser'); ?>" >
            <div class="form-field d-flex align-items-center">
            
                <input type="text" name="name" id="name" placeholder="Your name here" required>
            </div>
            <div class="form-field d-flex align-items-center">
        
                <input type="password" name="mdp" id="pwd" placeholder="Password" required>
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="<?php echo site_url('membrelogin/newuserpage'); ?>">Create an account</a>
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