<!-- Categories Section Begin -->


<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php 
                for($i = 0; $i < count($categorie); $i++){ ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url("assets/img/".$categorie[$i]['images']); ?>" style="border-radius:10px;">
                             <button type="button" class="btn btn-primary" disabled>
                                <?php echo $categorie[$i]['nomcategorie']; ?>
                            </button> 
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>All categories we have</h2>

                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php 
                            for($i = 0; $i < count($categorie) ; $i++){  ?>
                                <li data-filter=".<?php echo $categorie[$i]['nomcategorie']; ?>">
                                    <?php echo $categorie[$i]['nomcategorie']; ?>
                                </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row featured__filter"> 
            <!-- DEBUT FILTRATION  -->
            <?php 
                for($i = 0; $i < count($allobjet); $i++){ 
                    
                    $detail = $this->objet->getobjectbyid($allobjet[$i]['idobjet']);        // Get details of the objet
                    $image = $this->objet->getallimage($allobjet[$i]['idobjet']);           // Get all photosof the objet
                    ?>                  
                    <div class="col-lg-3 col-md-4 col-sm-6 mix <?php                        // Inserting the category name of each prod => Data filter
                        $tempCat = $this->objet->getallcatbyobject($allobjet[$i]['idobjet']);
                        for($k = 0; $k < count($tempCat); $k++){
                            echo $tempCat[$k]['nomcategorie'] .' '; 
                        }
                    ?>">
                        <div class="featured__item">
                        <a href="#">
                            <div class="featured__item__pic set-bg"  data-setbg="<?php echo base_url("assets/img/".$image[0]['link']); ?>">
                            </div>
                            <div class="featured__item__text border border-1 d-flex flex-column" style="border-radius:10px;">
                                <h4><a href="#" class="text-decoration-none"  style="color: #252525">
                                    <?php echo $allobjet[$i]['nomobjet'];    // Product name and price ?>
                                    </a>
                                </h4>           
                                <h6 class="text-muted "><?php echo $allobjet[$i]['prix']; ?> Ar</h6>  
                                <div class="d-flex flex-row justify-content-between">
                                <div class="">
                                            <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdropEx<?php echo $allobjet[$i]['idobjet']; ?>">
                                                Exchange
                                            </button>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-secondary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdropDe<?php echo $allobjet[$i]['idobjet']; ?>">
                                                Details
                                            </button>
                                        </div>

                                        <div class="">
                                            <button class="btn btn-outline-secondary btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdropHis<?php echo $allobjet[$i]['idobjet']; ?>">
                                                Historique
                                            </button>
                                        </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>         



                     <!-- DIV FOR DETAILS / MODAL --> 

                     <div class="modal fade" id="staticBackdropDe<?php echo $allobjet[$i]['idobjet']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">
                                        Details of <span class="fw-bolder"> <?php echo $allobjet[$i]['nomobjet']; ?>  </span> 
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                                </div>

                                <div class="modal-body">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row" style=" margin-bottom:10px">
                                            <div class="text-muted text-center" style="width: 49%;">
                                                Owner : 
                                            </div>
                                            <div class="text-center border border-1" style="width: 49%">
                                                <span class="fw-bolder"> <?php echo $detail[0]['nom']; ?>  </span> 
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-row" style=" margin-bottom:10px">
                                            <div class="text-muted text-center" style="width: 49%">
                                                Comment : 
                                            </div>
                                            <div class="text-center border border-1" style="width: 49%">
                                                <span class="fw-bolder"> <?php echo $detail[0]['comment']; ?>  </span> 
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row" style=" margin-bottom:10px">
                                            <div class="text-muted text-center" style="width: 49%">
                                                Estimative price : 
                                            </div>
                                            <div class="text-center border border-1" style="width: 49%">
                                                <span class="fw-bolder"> Ar <?php echo $detail[0]['prix']; ?>  </span> 
                                            </div>
                                        </div>

                                        <div class="text-center" style=" margin-bottom:10px">
                                           - Photos -
                                        </div>

                                        <div class="d-flex flex-row justify-content-between" style=" margin-bottom:10px">
                                            <div class="justify-content-center text-center" style="width: 45%">
                                                <div class="featured__item__pic set-bg"  data-setbg="<?php echo base_url("assets/img/".$image[0]['link']); ?>">
                                                </div>
                                            </div>
                                            <div class="justify-content-center text-center" style="width: 45%">
                                                <div class="featured__item__pic set-bg"  data-setbg="<?php echo base_url("assets/img/".$image[1]['link']); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
            
                                </div>
                            </div>
                        </div>
                    </div>
                    

                         <!-- DIV FOR HISTORIQUE / MODAL --> 
                    <div class="modal fade" id="staticBackdropHis<?php echo $allobjet[$i]['idobjet']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">
                                        Historic of <span class="fw-bolder"> <?php echo $allobjet[$i]['nomobjet']; ?>  </span> 
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                                </div>

                                <div class="modal-body">
                                  <?php $hist = $this->historique->gethistorique($allobjet[$i]['idobjet']); ?>
                                  <div class="d-flex flex-row justify-content-center">
                                        <div class="text-center" style="width:40%">Date</div>
                                        <div class="text-center"  style="width:40%">Owner</div>
                                    </div>

                                    <?php 
                                    if($hist != 0){
                                        for($p = 0; $p < count($hist); $p++ ){ ?>
                                        <div class="d-flex flex-row justify-content-center">
                                            <div class="text-center" style="width:40%"><?php echo $hist[$p]['daty']; ?></div>
                                            <div class="text-center" style="width:40%"><?php echo $hist[$p]['nom2']; ?></div>
                                        </div>
                                        <?php } 
                                    } ?>
                                </div>
                                <div class="modal-footer  d-flex flex-column">
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                     <!-- DIV FOR EXCHANGE / MODAL --> 

                    <div class="modal fade" id="staticBackdropEx<?php echo $allobjet[$i]['idobjet']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">
                                        Exchange <span class="fw-bolder"> <?php echo $allobjet[$i]['nomobjet']; ?>  </span>  with
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                                </div>

                                <div class="modal-body">
                                    <form action="<?php echo site_url("exchangeobjet/makeexchange") ?>" method="get">
                                        <div class="d-flex flex-column border border-1 justify-content-center">
                                            <p class="text-center">Choose between:</p>
                                            <p class="justify-content-center" style="margin-left:200px">
                                                <select name="idobjet1" class="form-control form-control-lg">
                                                    <?php for($k = 0; $k < count($allmyobjet); $k++){ ?>
                                                        <option value="<?php echo $allmyobjet[$k]['idobjet']; ?>">
                                                            <?php echo $allmyobjet[$k]['nomobjet']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </p>
                                            
                                            <input type="hidden" name="idobjet2" value="<?php echo $allobjet[$i]['idobjet']; ?>">
                                            <p class="text-center"><input type="submit" class="btn btn-primary" value="Exchange"></p>
                                        </div>
                                    </form>       
                                </div>
                                <div class="modal-footer justify-content-center">
            
                                </div>
                            </div>
                        </div>
                    </div>

                                        
                   
            <?php } ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="" alt="">
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
