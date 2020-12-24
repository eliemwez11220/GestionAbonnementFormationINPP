<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Candidat Edit</h3>
            </div>
			<?php echo form_open('candidat/edit/'.$candidat['cand_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="sexe" class="control-label"><span class="text-danger">*</span>Sexe</label>
						<div class="form-group">
							<select name="sexe" class="form-control">
								<option value="">select</option>
								<?php 
								$sexe_values = array(
									'masculin'=>'Masculin',
									'feminin'=>'Feminin',
								);

								foreach($sexe_values as $value => $display_text)
								{
									$selected = ($value == $candidat['sexe']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('sexe');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="etatCivil" class="control-label"><span class="text-danger">*</span>EtatCivil</label>
						<div class="form-group">
							<select name="etatCivil" class="form-control">
								<option value="">select</option>
								<?php 
								$etatCivil_values = array(
									'mariee'=>'Marié(e)',
									'celibataire'=>'Celibataire',
									'divorcee'=>'Divorcé(e)',
									'veuf'=>'veuf(ve)',
								);

								foreach($etatCivil_values as $value => $display_text)
								{
									$selected = ($value == $candidat['etatCivil']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('etatCivil');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="noms" class="control-label"><span class="text-danger">*</span>Noms</label>
						<div class="form-group">
							<input type="text" name="noms" value="<?php echo ($this->input->post('noms') ? $this->input->post('noms') : $candidat['noms']); ?>" class="form-control" id="noms" />
							<span class="text-danger"><?php echo form_error('noms');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<input type="text" name="adresse" value="<?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $candidat['adresse']); ?>" class="form-control" id="adresse" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $candidat['telephone']); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateNaissance" class="control-label"><span class="text-danger">*</span>DateNaissance</label>
						<div class="form-group">
							<input type="text" name="dateNaissance" value="<?php echo ($this->input->post('dateNaissance') ? $this->input->post('dateNaissance') : $candidat['dateNaissance']); ?>" class="has-datepicker form-control" id="dateNaissance" />
							<span class="text-danger"><?php echo form_error('dateNaissance');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lieuNaissance" class="control-label"><span class="text-danger">*</span>LieuNaissance</label>
						<div class="form-group">
							<input type="text" name="lieuNaissance" value="<?php echo ($this->input->post('lieuNaissance') ? $this->input->post('lieuNaissance') : $candidat['lieuNaissance']); ?>" class="form-control" id="lieuNaissance" />
							<span class="text-danger"><?php echo form_error('lieuNaissance');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="profession" class="control-label">Profession</label>
						<div class="form-group">
							<input type="text" name="profession" value="<?php echo ($this->input->post('profession') ? $this->input->post('profession') : $candidat['profession']); ?>" class="form-control" id="profession" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="niveauEtude" class="control-label"><span class="text-danger">*</span>NiveauEtude</label>
						<div class="form-group">
							<input type="text" name="niveauEtude" value="<?php echo ($this->input->post('niveauEtude') ? $this->input->post('niveauEtude') : $candidat['niveauEtude']); ?>" class="form-control" id="niveauEtude" />
							<span class="text-danger"><?php echo form_error('niveauEtude');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>