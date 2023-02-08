<section class="featured spad">
    <div style="margin-bottom:20px">
        <h3>Name : <span class="fw-bolder"><?php echo $this->session->userdata('name'); ?></span></h3>
        <span class="text-muted">
            Object number: <?php echo count($myobjet); ?>
        </span>
    </div>

    <div class="row"> 
        <!-- DEBUT FILTRATION  -->
        <?php 
            for($i = 0; $i < count($myobjet); $i++){ 

                $all = $this->objet->getallobject();
                $image = $this->objet->getallimage($myobjet[$i]['idobjet']); ?>                  
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"  data-setbg="<?php echo base_url("assets/img/".$image[0]['link']); ?>">
                        </div>
                        <div class="featured__item__text border border-1" style="border-radius:10px;">
                            <h4><a href="#" class="text-decoration-none"  style="color: #252525">
                                <?php echo $myobjet[$i]['nomobjet'];    // Product name and price ?>
                                </a>
                            </h4>           
                            <h6 class="text-muted "><?php echo $myobjet[$i]['prix']; ?> Ar</h6>  
                            <a class="btn btn-primary" href="<?php echo site_url('objetcontroller/modifyobjetpage/' . $myobjet[$i]['idobjet']); ?>">
                                Modify
                            </a>
                        </div>
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
