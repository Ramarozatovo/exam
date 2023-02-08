<section class="featured spad">
    <div>
        <span class="text-muted">
            Number of object matching: <?php if(isset($key)) echo $key ?>
        </span>
    </div>

    <div class="row"> 
            <!-- DEBUT FILTRATION  -->
            <?php 
                for($i = 0; $i < count($result); $i++){ 
                   
                    $detail = $this->objet->getobjectbyid($result[$i]['idobjet']);        // Get details of the objet
                    $image = $this->objet->getallimage($result[$i]['idobjet']);           // Get all photosof the objet
                    ?>                  
                    <div class="col-lg-3 col-md-4 col-sm-6 mix">
                        <div class="featured__item">
                        <a href="#">
                            <div class="featured__item__pic set-bg"  data-setbg="<?php echo base_url("assets/img/".$image[0]['link']); ?>">
                            </div>
                            <div class="featured__item__text border border-1 d-flex flex-column" style="border-radius:10px;">
                                <h4><a href="#" class="text-decoration-none"  style="color: #252525">
                                    <?php echo $result[$i]['nomobjet'];    // Product name and price ?>
                                    </a>
                                </h4>           
                                <h6 class="text-muted "><?php echo $result[$i]['prix']; ?> Ar</h6>  
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="">
                                        <button class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#staticBackdropEx<?php echo $result[$i]['idobjet']; ?>">
                                            Exchange
                                        </button>
                                    </div>
                                    <div class="">
                                        <button class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#staticBackdropDe<?php echo $result[$i]['idobjet']; ?>">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>         
                     <!-- DIV FOR DETAILS / MODAL --> 

                     <div class="modal fade" id="staticBackdropDe<?php echo $result[$i]['idobjet']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">
                                        Details of <span class="fw-bolder"> <?php echo $result[$i]['nomobjet']; ?>  </span> 
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
                    

                     <!-- DIV FOR EXCHANGE / MODAL --> 

                    <div class="modal fade" id="staticBackdropEx<?php echo $result[$i]['idobjet']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">
                                        Exchange <span class="fw-bolder"> <?php echo $result[$i]['nomobjet']; ?>  </span>  with
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
                                            
                                            <input type="hidden" name="idobjet2" value="<?php echo $result[$i]['idobjet']; ?>">
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
