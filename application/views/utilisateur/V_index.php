


  
               

 <div class="container">
    
<div class="row ">
    <div class="col-lg-2"></div>
        <div class="col-lg-9">
        <div class="card-header ">
                    <h3>Liste des utilisateur</h3>
                </div>
    <div class="text-center mb-3 col-md-3">
    <a href="<?php echo base_url().'index.php/C_utilisateur/EnregistrementUti/';?>" class="fa fa-plus  btn btn-success ">Nouveau Utilisateur</a>
    </div>
            <div class="card">
                
       
                    <div class="card-body">
       
                    <div class="table-responsive">

<table class="table table-bordered table-striped">
    <tr>
      <th scope="col">Id</th>
       <th>Nom</th>
       <th>Prenom</th>
       <th>Cni</th>
      <th>User name</th>
     
      <th>Prodil</th>
      <th>Etat</th>
      <th>Email</th>
       <th>Actions</th>
       
    </tr>

<?php  foreach($utilisateurs as $row):?>
 <tr>
 <td><?php echo $row['id_utilisateur'] ?></td>
   <td><?php echo $row['nom_utilisateur'] ?></td>
   <td><?php echo $row['prenom_utilisateur'] ?></td>
   <td><?php echo $row['cni'] ?></td>
   <td><?php echo $row['username'] ?></td>
     <td><?php echo $row['profil'] ?></td>
     <td><?php echo $row['etat'] ?></td>
     <td><?php echo $row['email'] ?></td>
     <td>
         <a href="<?php echo base_url().'index.php/C_utilisateur/edit/'.$row['id_utilisateur']?>" class="glyphicon glyphicon-edit btn btn-primary" >Edit</a>
         <a href="<?php echo base_url().'index.php/C_utilisateur/delete/'.$row['id_utilisateur']?>" class="btn btn-danger form-inline" >Delete</a>
     </td>


     <!-- <td><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil ">Modifier</span></a>
     <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-remove form-inline">Supprimer</span></a></td>
 </tr> -->
<?php  endforeach ?>
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




