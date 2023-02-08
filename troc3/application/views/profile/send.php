<section class="featured spad">
    <div class="text-center" style="margin-bottom:50px">
        <h3>User : <span class="fw-bolder"><?php echo $this->session->userdata('name'); ?></span></h3>
        <span class="text-muted">
            Number of object requested to change : <?php echo count($sent); ?>
        </span>
    </div>

    <div>
        <table class="table table-stripped" style="width:50%; margin-left:auto;margin-right:auto">
            <thead>
                <th> Object to change </th>
                <th> Object requested </th>
                <th> Owner of the object </th>
                <th></th>
            </thead>

            <?php 
            if($sent != 0){          
                for($i = 0; $i < count($sent); $i++){ ?>
                    <tbody>
                        <td>
                            <?php echo $sent[$i]['nomobjet1']; ?>
                        </td>
                        <td>
                            <?php echo $sent[$i]['nomobjet2']; ?>
                        </td>
                        <td>
                            <?php echo $sent[$i]['nom2']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                Cancel request
                            </button>
                        </td>
                    </tbody>
                <?php } 
            } ?>
        </table>
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
