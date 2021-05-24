



</div><div class="container">
    <div class="row mt -4">
        <div class="col-lg-3"></div>
           <div class="col-lg-6">
<div class="card">
                        < <div class="card-body">
                                <form action=" <?php echo base_url('index.php/C_categorie/create') ?>" method="post">
                                    
                                    <input type="hidden"name="id_catgorie"id="id_"class="form-control">
                                    
                                    <div class="form-group">
                                        <label for="nom_categorie">nom_categorie:</label>
                                        <input type="text" name="nom_categorie"id="nom_categorie"class="form-control">
                                        <?php echo form_error('nom_categorie');?>
                                    </div>
                                    <div>
                                    <button type="submit" class="btn btn-danger">Create</Button>
                                    <a href="<?php echo base_url().'index.php/C_categorie/index/';?>" type="submit" class="btn btn-info">Cancel</a>
  
  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<div class="col-lg3"></div>
</div>



</div>