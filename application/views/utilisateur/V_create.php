

    <div class="container">
<div class="row mt-4">
    <div class="col-lg-3"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header ">
                    <h3>Enregistrer l'utilisateur</h3>
                </div>
                    <div class="card-body">
                    <form method="post" name="createUtilisateur" action="<?php echo base_url().'index.php/C_utilisateur/EnregistrementUti';?>">
               <div class="panel-body">
                
          <div class="row">
          <div class="col-md-6">
                 <label for="">Nom </label>
                 <input type="text" name="nom_utilisateur" value="" class="form-control">
                 <?php echo form_error('nom_utilisateur'); ?>
              </div>
              <div class="col-md-6">
                 <label for="">Prenom </label>
                 <input type="text" name="prenom_utilisateur" value="" class="form-control">
                 <?php echo form_error('prenom_utilisateur'); ?>
              </div>
          </div>
              <div class="row">
              <div class="col-md-6">
                 <label for="">Cni</label>
                 <input type="text" name="cni" value="" class="form-control">
                 <?php echo form_error('cni'); ?>
              </div>
              <div class="col-md-6">
                 <label for="">User name</label>
                 <input type="text" name="username" value="" class="form-control">
                 <?php echo form_error('username'); ?>
              </div>
              </div>
              <div class="row">
              <div class="col-md-6">
                 <label for="">Password</label>
                 <input type="password" name="password" value="" class="form-control">
                 <?php echo form_error('password'); ?>
              </div>
              <div class="col-md-6">
                 <label for="">Email</label>
                 <input type="email" name="email" value="" class="form-control">
                 <?php echo form_error('email'); ?>
              </div>
              </div>
              <div class="form-group">
                        <label for="profil">Profil</label><br />
                                <select name="profil" id="profil" class="form-control">
                            
                                    <option value="admin">admin</option>
                                    <option value="simple">simple</option>
                                    
                                </select>
                                <?php echo form_error('profil'); ?>
                 </div>
              <div class="form-group">
                        <label for="etat">Etat</label><br />
                                <select name="etat" id="etat" class="form-control">
                            
                                    <option value="active">active</option>
                                    <option value="desactive">desactive</option>
                                    
                                </select>
                                <?php echo form_error('etat'); ?>
                 </div>
                 
                 
              <div class="form-group">
                <button class="btn btn-primary">create</button>
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
