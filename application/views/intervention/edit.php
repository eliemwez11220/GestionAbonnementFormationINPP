<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Intervention Edit</h3>
            </div>
			<?php echo form_open('intervention/edit/'.$intervention['inter_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="formateur_sid" class="control-label"><span class="text-danger">*</span>Formateur</label>
						<div class="form-group">
							<select name="formateur_sid" class="form-control">
								<option value="">select formateur</option>
								<?php 
								foreach($all_formateurs as $formateur)
								{
									$selected = ($formateur['ens_id'] == $intervention['formateur_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$formateur['ens_id'].'" '.$selected.'>'.$formateur['noms'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('formateur_sid');?></span>
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
									$selected = ($formation['forma_id'] == $intervention['formation_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$formation['forma_id'].'" '.$selected.'>'.$formation['intituleSession'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('formation_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateInterv" class="control-label">DateInterv</label>
						<div class="form-group">
							<input type="text" name="dateInterv" value="<?php echo ($this->input->post('dateInterv') ? $this->input->post('dateInterv') : $intervention['dateInterv']); ?>" class="has-datepicker form-control" id="dateInterv" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="statutInter" class="control-label">StatutInter</label>
						<div class="form-group">
							<input type="text" name="statutInter" value="<?php echo ($this->input->post('statutInter') ? $this->input->post('statutInter') : $intervention['statutInter']); ?>" class="form-control" id="statutInter" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="effectifCandidats" class="control-label">EffectifCandidats</label>
						<div class="form-group">
							<input type="text" name="effectifCandidats" value="<?php echo ($this->input->post('effectifCandidats') ? $this->input->post('effectifCandidats') : $intervention['effectifCandidats']); ?>" class="form-control" id="effectifCandidats" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="matiereVue" class="control-label">MatiereVue</label>
						<div class="form-group">
							<textarea name="matiereVue" class="form-control" id="matiereVue"><?php echo ($this->input->post('matiereVue') ? $this->input->post('matiereVue') : $intervention['matiereVue']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $intervention['observation']); ?></textarea>
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