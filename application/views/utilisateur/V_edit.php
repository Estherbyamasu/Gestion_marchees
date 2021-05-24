
    <div class="container">
 
<div class="row mt-2">
    <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Modification  d'un Etudiant</div>
                    <div class="card-body">
                    <form method="post" name="createUtilisateur" action="<?php echo base_url().'index.php/C_utilisateur/UpdateUti/'. $utilisateurs['id_utilisateur'] ; ?>">
               <div class="panel-body">
                
          <div class="col-md-12">
          <div class="col-md-6">
                 <input type="hidden" name="id_utilisateur" value="<?php echo set_value('id_utilisateur',$utilisateurs['id_utilisateur'])?>" class="form-control">
                 <?php //echo form_error('nom'); ?>
              </div>
              <div class="row">
              <div class="col-md-6">
                 <label for="">Nom utilisateur</label>
                 <input type="text" name="nom_utilisateur" value="<?php echo set_value('nom_utilisateur',$utilisateurs['nom_utilisateur'])?>" class="form-control">
                 <?php //echo form_error('nom'); ?>
              </div>
             
              <div class="col-md-6">
                 <label for="">Prenom</label>
                 <input type="text" name="prenom_utilisateur" value="<?php echo set_value('prenom_utilisateur',$utilisateurs['prenom_utilisateur'])?>" class="form-control">
                 <?php //echo form_error('prenom'); ?>
              </div>
              </div>

              <div class="row">
              <div class="col-md-6">
                 <label for="">Cni</label>
                 <input type="text" name="cni" value="<?php echo set_value('cni',$utilisateurs['cni'])?>" class="form-control">
                 <?php //echo form_error('nom'); ?>
              </div>
             
              <div class="col-md-6">
                 <label for="">User Name</label>
                 <input type="text" name="username" value="<?php echo set_value('username',$utilisateurs['username'])?>" class="form-control">
                 <?php //echo form_error('prenom'); ?>
              </div>
              </div>



              <div class="row">
              <div class="col-md-6">
                 <label for="">Password</label>
                 <input type="password" name="password" value="<?php echo set_value('password',$utilisateurs['password'])?>" class="form-control">
                 <?php //echo form_error('nom'); ?>
              </div>
             
              <div class="col-md-6">
                 <label for="">Email</label>
                 <input type="text" name="email" value="<?php echo set_value('email',$utilisateurs['email'])?>" class="form-control">
                 <?php //echo form_error('prenom'); ?>
              </div>
              </div>

              <div class="form-group">
              
              <label for="profil">Profil</label><br />
              <input type="text" name="profil" value="<?php echo set_value('profil',$utilisateurs['profil'])?>" class="form-control">
                
                                <!-- <select name="genre" id="genre" value="<?php // echo set_value('feminin',$genre['feminin'])?> class="form-control">
                            
                                    <option value="feminin">Feminin</option>
                                    <option value="masculin">Masculin</option>
                                    
                                </select> -->
                                <?php //echo form_error('genre'); ?>
                               </div>
                               <div class="form-group">                 
              <label for="etat">Etat</label><br />
              <input type="text" name="etat" value="<?php echo set_value('etat',$utilisateurs['etat'])?>" class="form-control">
                
                                <!-- <select name="genre" id="genre" value="<?php // echo set_value('feminin',$genre['feminin'])?> class="form-control">
                            
                                    <option value="feminin">Feminin</option>
                                    <option value="masculin">Masculin</option>
                                    
                                </select> -->
                                <?php //echo form_error('genre'); ?>
                               </div>
             
              <div class="form-group">
                <button class="btn btn-primary">Modifier</button>
                <a href="<?php echo base_url().'index.php/C_utilisateur/index/';?>" class="btn btn-secondary">Cancel</a>
              </div>
          </div>
          
      </div>
      </form>
                     </div>
                </div>
            </div>
        <div class="col-lg-3"></div>
    </div>
</div>

  </div>
    </div> 
