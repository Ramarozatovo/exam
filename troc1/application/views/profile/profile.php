<section class="featured spad">
    <div>
        <h3>Name : <span class="fw-bolder"><?php echo $this->session->userdata('name'); ?></span></h3>
        <span class="text-muted">
            Object number: <?php echo count($myobjet); ?>
        </span>
    </div>

    <div class="row"> 
        <!-- DEBUT FILTRATION  -->
        <?php 
            for($i = 0; $i < count($myobjet); $i++){ ?>                  
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                    <a href="#">
                        <div class="featured__item__pic set-bg"  data-setbg="../img/hab/<?php 

                        // $allMyPhoto = getAllMyPhoto($allobjet -> idhabitation);
                        // echo $allMyPhoto[0] -> link;                  
                        ?>">
                        </div>
                        <div class="featured__item__text border border-1" style="border-radius:10px;">
                            <h4><a href="#" class="text-decoration-none"  style="color: #252525">
                                <?php echo $myobjet[$i]['nomobjet'];    // Product name and price ?>
                                </a>
                            </h4>           
                            <h6 class="text-muted "><?php echo $myobjet[$i]['prix']; ?> Ar</h6>  
                        </div>
                        </a>
                    </div>
                </div>               
        <?php } ?>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="" alt="">c
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
