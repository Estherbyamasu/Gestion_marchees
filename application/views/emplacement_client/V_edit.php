<div class="container">
 
<div class="row mt-2">
    <div class="col-lg-3"></div>
        <div class="col-lg-8">
            <div class="card">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Modification de l'emplacement place</h3>
	</div>
	<div class="body">
		<br/>
		<form class="form-horizontal" action="<?php echo base_url().'index.php/C_emplacement_client/Update/'. $emplacement_clients['id_emplacemt_client'] ; ?>"  method="post">
			<div class="form-group">

				<input type="hidden" name="id_emplacemt_client" class="form-control" value="<?=$emplacement_clients['id_emplacement']?>">

				<label class="col-lg-4 control-label">Client</label>
				<div class="col-lg-8">
					<select class="form-control" name="client">
						<?php 

						    $donne=array('id_client'=>$emplacement_clients['id_client'] );
                            $client=$this->M_utilisateur_place_client->GetElement('client',$donne);

						?>
						<option value="<?=$client['id_client']?>"><?=$client['nom_client'].'    '.$client['prenom_client']?></option>
						<?php foreach ($clients as $client): ?>
                           <option value="<?=$client['id_client'] ?>"><?=$client['nom_client'].'  '.$client['prenom_client']    ?></option>
						<?php endforeach;?>
					</select>
					<?php echo form_error('client', '<span class="text-danger">', '</span>'); ?>
				</div>				
			</div>
			<div class="form-group">
				<label class="col-lg-4 control-label">Emplacement</label>
				<div class="col-lg-8">
					<select class="form-control" name="emplacement">
						<?php

						    $donne=array('id_emplacement'=>$emplacement_clients['id_emplacement'] );
                            $emplacement=$this->M_utilisateur_place_client->GetElement('emplacement',$donne);
						?>
						<option value="<?=$emplacement['id_emplacement']?>"><?=$emplacement['designation']?></option>
						<?php foreach ($emplacements as $emplacement): ?>
                           <option value="<?=$emplacement['id_emplacement'] ?>"><?=$emplacement['designation']   ?></option>
						<?php endforeach;?>
					</select>
				</div>				
			</div>
			<div class="form-group">
				<label class="col-lg-4 control-label">Date d'entree</label>
				<div class="col-lg-8">
                   <input type="date" name="date_entree" class="form-control" value="<?=$emplacement_clients['date_entree']?>">
                    <?php echo form_error('date_entree','<span class="text-danger">','</span>')?>
				</div>				
			</div>
		    <div class="form-group">
				<label class="col-lg-4 control-label">Date de sortie</label>
				<div class="col-lg-8">
                   <input type="date" name="date_sortie" class="form-control" value="<?=$emplacement_clients['date_sortie']?>">
                   <?php echo form_error('date_sortie','<span class="text-danger">','</span>')?>
				</div>				
			</div>
		

		    <div class="form-group">
				<div class="col-lg-5 col-lg-offset-7">
                   <input type="submit" value="Modifier"  class="btn btn-primary">
				</div>				
			</div>
		</form>
	
        </div>	
</div>
</div>	
</div>
</div>	
</div>