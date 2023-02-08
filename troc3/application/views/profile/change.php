<section class="featured spad">
    <div class="text-center" style="margin-bottom:50px">
        <h3>User : <span class="fw-bolder"><?php echo $this->session->userdata('name'); ?></span></h3>
        <span class="text-muted">
            Number of troc Accepted : <?php 
                if($accepted == 0) echo "0";
                else echo count($accepted); 
            ?>
        </span>
    </div>

    <div>
        <table class="table table-stripped" style="width:50%; margin-left:auto;margin-right:auto">
            <thead>
                <th> Object to change </th>
                <th> Owner who requests</th>
                <th> Object requested </th>
                <th> Owner of the object </th>
                <th></th>
            </thead>

            <?php 
            if($accepted != 0){
                for($i = 0; $i < count($accepted); $i++){ ?>
                    <tbody>
                        <td>
                            <?php echo $accepted[$i]['nomobjet1']; ?>
                        </td>
                        <td>
                            <?php echo $accepted[$i]['nom1']; ?>
                        </td>
                        <td>
                            <?php echo $accepted[$i]['nomobjet2']; ?>
                        </td>
                        <td>
                            <?php echo $accepted[$i]['nom2']; ?>
                        </td>
                        <td>
                            <button class="btn btn-primary" disabled>
                                Accepted
                            </button>
                        </td>
                    </tbody>
                <?php } 
            } ?>
        </table>
    </div>
</section>

<section class="featured spad">
    <div div class="text-center" style="margin-bottom:50px">
        <span class="text-muted">
            Number of troc Refused : <?php 
                if($refused == 0) echo "0";
                else echo count($refused);  ?>
        </span>
    </div>

    <div>
        <table class="table table-stripped" style="width:50%; margin-left:auto;margin-right:auto">
            <thead>
                <th> Object to change </th>
                <th> Owner who requests</th>
                <th> Object requested </th>
                <th> Owner of the object </th>
                <th></th>
            </thead>

            <?php if($refused != 0){ 
            for($i = 0; $i < count($refused); $i++){ ?>
                <tbody>
                    <td>
                        <?php echo $refused[$i]['nomobjet1']; ?>
                    </td>
                    <td>
                        <?php echo $refused[$i]['nom1']; ?>
                    </td>
                    <td>
                        <?php echo $refused[$i]['nomobjet2']; ?>
                    </td>
                    <td>
                        <?php echo $refused[$i]['nom2']; ?>
                    </td>
                    <td>
                        <button class="btn btn-primary" disabled>
                            Refused
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
