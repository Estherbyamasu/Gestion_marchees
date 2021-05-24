
         

<div class="container">
    
    <div class="row ">
        <div class="col-lg-2"></div>
            <div class="col-lg-10">
            <div class="card-header ">
                        <h3>Liste des emplacement client</h3>
                    </div>
        <div class="text-center mb-3 col-md-3">
        <a href="<?php echo base_url().'index.php/C_emplacement_client/create/';?>" class="fa fa-plus  btn btn-success "> Nouveau Empl Client </a>
        </div>
                <div class="card">
                    
           
                        <div class="card-body">
           
                        <div class="table-responsive">
    
                        <table  id="example1" class="table table-bordered table-striped">

<?php echo $this->session->flashdata('message') ?>

 <tr class="bg-secondary text-center">
   <th><label>ID </label></th>
   <th><label>Client </label></th>
   <th><label>Emplacement</label></th>
   <th><label>Date d'entree </label></th>
   <th><label>Date de sortie</label></th>
   <th><label>Actions</label></th>
   
 </tr>

 <?php foreach ($emplacement_clients as $emplacement_client):
  
    $donne=array('id_client' =>$emplacement_client['id_client'] );
    $client=$this->M_utilisateur_place_client->GetElement('client',$donne);

    $data=array('id_emplacement'=>$emplacement_client['id_emplacement'] );
    $emplacement=$this->M_utilisateur_place_client->GetElement('emplacement',$data);
 
  ?>
   <tr>
   <td><?=$emplacement_client['id_emplacemt_client'] ?></td>
     <td><?=$client['nom_client'].'  '.$client['prenom_client'] ?></td>
     <td><?=$emplacement['designation'] ?></td>
     <td><?=$emplacement_client['date_entree'] ?></td>
    <td><?=$emplacement_client['date_sortie'] ?></td>
     <td>
     <a href="<?php echo base_url().'index.php/C_emplacement_client/edit/'.$emplacement_client['id_emplacemt_client']?>" class="glyphicon glyphicon-edit btn btn-primary" >Edit</a>
         <a href="<?php echo base_url().'index.php/C_emplacement_client/delete/'.$emplacement_client['id_emplacemt_client']?>" class="btn btn-danger form-inline" >Delete</a>
     </td>
   </tr>
<?php endforeach;?>
</table>
    </div>
                         </div>
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
      </div>
        </div> 
    
                         </div>
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
      </div>
        </div> 
    
                         </div>
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
      </div>
        </div> 
    
    
    
    
    