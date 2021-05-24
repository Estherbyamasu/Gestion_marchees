<div class="containeer">
  <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
         <div class="card-header"> Liste des prix</div>
            <div> 
                <a href="<?php echo base_url().'index.php/C_prix/create'?> " class="btn btn-primary" >Nouveau Prix</a>
            </div>
           <div class="card">
             <div class="card-body">
                <div class="table-responsive">
                   <table class="table table-bordered table-striped">
                       <tr class="bg-secondary text-center">
                           <th>ID</th>
                           <th>PRIX</th>
                           <th>ACTIONS</th>
                       </tr>
                       <?php foreach($pris as $prix){?>
                       <tr>
                            <td><?php echo $prix['id_prix']?></td>
                            <td><?php echo $prix['prix']?></td>
                            <td>
                              <a href="<?php echo base_url().'index.php/C_prix/edit/'.$prix['id_prix']?>" class="btn btn-success" >Edit</a>
                              <a href="<?php echo base_url().'index.php/C_prix/delete/'.$prix['id_prix']?>" class="btn btn-danger" >Delete</a>
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
