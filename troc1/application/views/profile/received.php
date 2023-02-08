<section class="featured spad">
    <div>
        <h3>Name : <span class="fw-bolder"><?php echo $this->session->userdata('name'); ?></span></h3>
        <span class="text-muted">
            Number of object proposed : <?php echo count($received); ?>
        </span>
    </div>

    <div>
        <table class="table table-stripped">
            <thead>
                <th> My Object to change </th>
                <th> The Object requested </th>
                <th> Owner of the object </th>
                <th></th>
                <th></th>
            </thead>

            <?php for($i = 0; $i < count($received); $i++){ ?>
                <tbody>
                    <td>
                        <?php echo $received[$i]['nomobjet2']; ?>
                    </td>
                    <td>
                        <?php echo $received[$i]['nomobjet1']; ?>
                    </td>
                    <td>
                        <?php echo $received[$i]['nom1']; ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo site_url("exchangeobjet/makeacceptation/". $received[$i]['idobjet2'] ."/". $received[$i]['idobjet1'] ."/". $received[$i]['idtroc']); ?>">
                            Accept
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo site_url("exchangeobjet/declineacceptation/". $received[$i]['idtroc']); ?>">
                            Decline
                        </a>
                    </td>
                </tbody>
            <?php } ?>
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
