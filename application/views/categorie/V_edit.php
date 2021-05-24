</div><div class="container">
    <div class="row mt -4">
        <div class="col-lg-3"></div>
           <div class="col-lg-6">
<div class="card">
                        <div class="card-header bg-primary"> Categorie des places</di v>
                            <div class="card-body">
                            
                                <form action=" <?php echo base_url('index.php/C_categorie/updateC/'.$categorie['id_catgorie']) ?>" method="post">
                                   
                                    <div class="form-group">
                                        <label for="prix">categorie:</label>
                                        <input type="text" name="nom_categorie"  value="<?php echo set_value('categorie',$categorie['nom_categorie'])?>"     id="" class="form-control">
                                    </div>
                                    <div>
                                    <button type="submit" class="btn btn-danger">Modifier</Button>
                                     <a href="<?php echo base_url().'index.php/C_categorie/index/';?>" type="submit" class="btn btn-info">Cancel</a>
  
  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<div class="col-lg3"></div>
</div>



</div>