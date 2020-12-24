<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Inscription Edit</h3>
            </div>
			<?php echo form_open('inscription/edit/'.$inscription['ins_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="candidat_sid" class="control-label"><span class="text-danger">*</span>Candidat</label>
						<div class="form-group">
							<select name="candidat_sid" class="form-control">
								<option value="">select candidat</option>
								<?php 
								foreach($all_candidats as $candidat)
								{
									$selected = ($candidat['cand_id'] == $inscription['candidat_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$candidat['cand_id'].'" '.$selected.'>'.$candidat['noms'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('candidat_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="formation_sid" class="control-label"><span class="text-danger">*</span>Formation</label>
						<div class="form-group">
							<select name="formation_sid" class="form-control">
								<option value="">select formation</option>
								<?php 
								foreach($all_formations as $formation)
								{
									$selected = ($formation['forma_id'] == $inscription['formation_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$formation['forma_id'].'" '.$selected.'>'.$formation['intituleSession'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('formation_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateInscription" class="control-label">DateInscription</label>
						<div class="form-group">
							<input type="text" name="dateInscription" value="<?php echo ($this->input->post('dateInscription') ? $this->input->post('dateInscription') : $inscription['dateInscription']); ?>" class="has-datetimepicker form-control" id="dateInscription" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="statutInscription" class="control-label">StatutInscription</label>
						<div class="form-group">
							<input type="text" name="statutInscription" value="<?php echo ($this->input->post('statutInscription') ? $this->input->post('statutInscription') : $inscription['statutInscription']); ?>" class="form-control" id="statutInscription" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateValidation" class="control-label">DateValidation</label>
						<div class="form-group">
							<input type="text" name="dateValidation" value="<?php echo ($this->input->post('dateValidation') ? $this->input->post('dateValidation') : $inscription['dateValidation']); ?>" class="has-datepicker form-control" id="dateValidation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $inscription['observation']); ?></textarea>
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