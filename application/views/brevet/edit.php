<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Brevet Edit</h3>
            </div>
			<?php echo form_open('brevet/edit/'.$brevet['brev_id']); ?>
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
									$selected = ($candidat['cand_id'] == $brevet['candidat_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$candidat['cand_id'].'" '.$selected.'>'.$candidat['noms'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('candidat_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numRef" class="control-label"><span class="text-danger">*</span>NumRef</label>
						<div class="form-group">
							<input type="text" name="numRef" value="<?php echo ($this->input->post('numRef') ? $this->input->post('numRef') : $brevet['numRef']); ?>" class="form-control" id="numRef" />
							<span class="text-danger"><?php echo form_error('numRef');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateBrevet" class="control-label">DateBrevet</label>
						<div class="form-group">
							<input type="text" name="dateBrevet" value="<?php echo ($this->input->post('dateBrevet') ? $this->input->post('dateBrevet') : $brevet['dateBrevet']); ?>" class="has-datepicker form-control" id="dateBrevet" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pourcentage" class="control-label"><span class="text-danger">*</span>Pourcentage</label>
						<div class="form-group">
							<input type="text" name="pourcentage" value="<?php echo ($this->input->post('pourcentage') ? $this->input->post('pourcentage') : $brevet['pourcentage']); ?>" class="form-control" id="pourcentage" />
							<span class="text-danger"><?php echo form_error('pourcentage');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mention" class="control-label"><span class="text-danger">*</span>Mention</label>
						<div class="form-group">
							<input type="text" name="mention" value="<?php echo ($this->input->post('mention') ? $this->input->post('mention') : $brevet['mention']); ?>" class="form-control" id="mention" />
							<span class="text-danger"><?php echo form_error('mention');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="coteObtenue" class="control-label">CoteObtenue</label>
						<div class="form-group">
							<input type="text" name="coteObtenue" value="<?php echo ($this->input->post('coteObtenue') ? $this->input->post('coteObtenue') : $brevet['coteObtenue']); ?>" class="form-control" id="coteObtenue" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="specialite" class="control-label">Specialite</label>
						<div class="form-group">
							<input type="text" name="specialite" value="<?php echo ($this->input->post('specialite') ? $this->input->post('specialite') : $brevet['specialite']); ?>" class="form-control" id="specialite" />
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