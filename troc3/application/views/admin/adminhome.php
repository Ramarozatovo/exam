<div>
    <div class="border border-1" style="padding:1% 1% 1% 1%; margin-bottom:50px">
        <h3 >List of all categories</h3>
    </div>

    <div>
        <table class= "table table-striped" style="width:50%; margin-left:auto; margin-right:auto">
            <thead>
                <th>Id category</th>
                <th>Name Category</th>
                <th></th>
                <th></th>
            </thead>
            <?php for($i = 0; $i < count($categorie); $i++){ ?>
                <tbody>
                    <td> <?php echo $categorie[$i]['idcategorie']; ?> </td>
                    <td>  <?php echo $categorie[$i]['nomcategorie']; ?>  </td>
                    <td style="width:10%"> 
                        <a class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#staticBackdropMod<?php echo $categorie[$i]['idcategorie']; ?>">Modify</a>
                    </td>
                    <td style="width:10%">
                        <a class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#staticBackdropDel<?php echo $categorie[$i]['idcategorie']; ?>">Delete</a>
                    </td>
                </tbody>

                  <!-- DIV FOR DELETE / MODAL --> 

                  <div class="modal fade" id="staticBackdropDel<?php echo $categorie[$i]['idcategorie']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                    Are you sure to delete categorie <span class="fw-bolder"> <?php echo $categorie[$i]['nomcategorie']; ?> ? </span> 
                                </h5> 
                            </div>

                            <div class="modal-body text-center">
                                <form action="<?php echo site_url('categoriecontroller/deletecategoriecontroller'); ?>" method="post">
                                    <input type="hidden" name="idcategorie" value="<?php echo $categorie[$i]['idcategorie']; ?>">
                                    <div class="d-flex flex-row justify-content-between" style="width:50%; margin-left:auto; margin-right:auto">
                                    <input type="submit" class="btn btn-danger btn-lg" value="Yes" style="margin-top:20px">
                                </form>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">No</button>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
        
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DIV FOR MODIFY / MODAL --> 

                <div class="modal fade" id="staticBackdropMod<?php echo $categorie[$i]['idcategorie']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                    Details of categorie <span class="fw-bolder"> <?php echo $categorie[$i]['nomcategorie']; ?>  </span> 
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> 
                            </div>

                            <div class="modal-body text-center">
                                <form action="<?php echo site_url('categoriecontroller/modifycategoriecontroller'); ?>" method="post">
                                    Name: <input type="text" class="form-control" value="<?php echo $categorie[$i]['nomcategorie']; ?>" name="nomcategorie">
                                    <input type="hidden" name="idcategorie" value="<?php echo $categorie[$i]['idcategorie']; ?>">
                                    <input type="submit" class="btn btn-primary" value="Change" style="margin-top:20px">
                                </form>
                            </div>
                            <div class="modal-footer justify-content-center">
        
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </table>
    </div>
</div>