

</div><div class="container">
    <div class="row mt -4">
        <div class="col-lg-3"></div>
           <div class="col-lg-6">
<div class="card">
                        <div class="card-header bg-primary"> Enregistrer les prix</di v>
                            <div class="card-body">
                                <form action=" <?php echo base_url('index.php/C_prix/create') ?>" method="post">
                                    
                                    <input type="hidden"name="id_prix"id="id_prix"class="form-control">
                                    
                                    <div class="form-group">
                                        <label for="prix">Prix:</label>
                                        <input type="text" name="prix"id="prix"class="form-control">
                                        <?php echo form_error('prix');?>
                                    </div>
                                    <div>
                                    <button type="submit" class="btn btn-danger">Create</Button>
                                    <a href="<?php echo base_url().'index.php/C_prix/index/';?>" type="submit" class="btn btn-info">Cancel</a>
  
  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<div class="col-lg3"></div>
</div>



</div>