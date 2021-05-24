
<div class="container">
<div class="row mt-4">
    <div class="col-lg-3"></div>
        <div class="col-lg-8">
            <div class="card">
            <div class="card-header ">
                    <h3>L'ajout de l'emplacement place</h3>
                </div>
<div class="panel panel-default">
<div class="body">
		<br/>
		<form class="form-horizontal" action="<?php echo base_url().'index.php/C_emplacement_client/create';?>"  method="post">
			<div class="form-group">
				<label class="col-lg-4 control-label">Client</label>
				<div class="col-lg-9">
					<select class="form-control" name="client">
						<option>--  Séléctionner le client  ---</option>
						<?php foreach ($clients as $client): ?>
                           <option value="<?=$client['id_client'] ?>"><?=$client['nom_client'].'  '.$client['prenom_client']    ?></option>
						<?php endforeach;?>
					</select>
					<?php echo form_error('client', '<span class="text-danger">', '</span>'); ?>
				</div>				
			</div>
			<div class="form-group">
				<label class="col-lg-4 control-label">Emplacement</label>
				<div class="col-lg-9">
					<select class="form-control" name="emplacement">
						<option>--  Séléctionner l'emplacement'  ---</option>
						<?php foreach ($emplacements as $emplacement): ?>
                           <option value="<?=$emplacement['id_emplacement'] ?>"><?=$emplacement['designation']   ?></option>
						<?php endforeach;?>
					</select>
				</div>				
			</div>
			<div class="form-group">
				<label class="col-lg-4 control-label">Date d'Entree</label>
				<div class="col-lg-9">
                   <input type="date" name="date_entree" class="form-control">
                    <?php echo form_error('date_entree','<span class="text-danger">','</span>')?>
				</div>				
			</div>
		    <div class="form-group">
				<label class="col-lg-4 control-label">Date de sortie</label>
				<div class="col-lg-9">
                   <input type="date" name="date_sortie" class="form-control">
                   <?php echo form_error('date_sortie','<span class="text-danger">','</span>')?>
				</div>				
			</div>
		   

		    <div class="form-group">
				<div class="col-lg-5 col-lg-offset-7">
                   <input type="submit" value="create"  class="btn btn-primary">
                   <a href="<?php echo base_url().'index.php/C_emplacement_client/index/';?>" class="btn btn-secondary">Cancel</a>	
				</div>		
               	
			</div>
		</form>
	</div>	
</div>
</div>	
</div>
</div>	
</div>
</a>