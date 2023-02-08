
<div>
    <div class="wrapperl" >
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
                <div class="card bg-light text-secondary" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form action="<?php echo site_url("objetcontroller/modifyobjet") ?>" method="POST">
                                    <div class="d-flex flex-row justify-content-between">
                                        <div style="width:50%; margin-left:auto; margin-right:auto" >
                                            <h3 style="margin-bottom:20px">Mofidy product : <?php echo $objetcontent[0]['nomobjet']; ?> </h3>

                                            <div class="d-flex flex-row align-items-center" style="margin-bottom:10px">   
                                                <div class="form-outline flex-fill mb-0">
                                                    <p><label class="form-label" >Categorie: </label></p>
                                                    <select name="categorie" class="form-control">
                                                        <?php for ($i = 0; $i < count($allcat); $i++) { ?>
                                                            <option value="<?php echo $allcat[$i]['idcategorie']; ?>" 
                                                            <?php if($mycategorie[0]['idcategorie'] == $allcat[$i]['idcategorie']){
                                                                echo ' selected '; } ?>> 
                                                                <?php echo $allcat[$i]['nomcategorie']; ?>
                                                            </option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center" style="margin-bottom:10px">
                                        
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" >Name objet: </label>
                                                    <input type="text" class="form-control" name = "nom" value="<?php echo $objetcontent[0]['nomobjet']; ?>" required/>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center" style="margin-bottom:10px">
                                            
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" >Price:</label>
                                                    <input type="number"  class="form-control" name = "prix" value="<?php echo $objetcontent[0]['prix']; ?>" required/>
                                                </div>
                                            </div>

                                            
                                            <div class="d-flex flex-row align-items-center " style="margin-bottom:10px">
                                            
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label">Description:</label>
                                                    <input type="text" class="form-control" name = "desc" value="<?php echo $objetcontent[0]['comment']; ?>" required/>
                                                </div>
                                            </div>

                                            <input type="hidden" name="idobjet" value="<?php echo $objetcontent[0]['idobjet']; ?>">  
                                            <button class="btn btn-primary btn-lg" style = "width:100%">Modify Object</button>
                                        </div>
                                </form>
                            </div>
                            <div class="border border-5" style="margin-top: 50px">
                                <?php 
                                    if(isset($_GET['fail']) == true){ ?>
                                        <h6 style="color: red">
                                            Error, please verify data insert
                                        </h6>
                                    <?php }

                                    if(isset($_GET['case']) == true){ ?>
                                        <h6 style="color: blue">
                                            New Habitation insert
                                        </h6>
                                    <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
