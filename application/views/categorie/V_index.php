<div class="containeer">
  <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
         <div class="card-header"> Categorie des places</div>
         <div> 
                <a href="<?php echo base_url().'index.php/C_categorie/indexh'?> " class="btn btn-primary" >create</a>
            </div>
   
           <div class="card">
             <div class="card-body">
                <div class="table-responsive">
                   <table class="table table-bordered table-striped">
                       <tr class="bg-secondary text-center">
                           <th>ID</th>
                           <th>CATEGORIE</th>
                           <th>ACTIONS</th>
                       </tr>
                       <?php foreach($categories as $categorie){?>
                       <tr>
                            <td><?php echo $categorie['id_catgorie']?></td>
                            <td><?php echo $categorie['nom_categorie']?></td>
                            <td>
                              <a href="<?php echo base_url().'index.php/C_categorie/edit/'.$categorie['id_catgorie']?>" class="btn btn-success" >Edit</a>
                              <a href="<?php echo base_url().'index.php/C_categorie/delete/'.$categorie['id_catgorie']?>" class="btn btn-danger" >Delete</a>
                            </td>
                            
   
                       </tr>
                       <?php }?>
                       </table>
                </div>
             </div>
           </div>
      </div>
      <div class="col-lg-3"></div>
  </div>
</div>
