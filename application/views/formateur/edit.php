<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Formateur Edit</h3>
            </div>
			<?php echo form_open('formateur/edit/'.$formateur['ens_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="matricule" class="control-label"><span class="text-danger">*</span>Matricule</label>
						<div class="form-group">
							<input type="text" name="matricule" value="<?php echo ($this->input->post('matricule') ? $this->input->post('matricule') : $formateur['matricule']); ?>" class="form-control" id="matricule" />
							<span class="text-danger"><?php echo form_error('matricule');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="noms" class="control-label"><span class="text-danger">*</span>Noms</label>
						<div class="form-group">
							<input type="text" name="noms" value="<?php echo ($this->input->post('noms') ? $this->input->post('noms') : $formateur['noms']); ?>" class="form-control" id="noms" />
							<span class="text-danger"><?php echo form_error('noms');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="specialite" class="control-label">Specialite</label>
						<div class="form-group">
							<input type="text" name="specialite" value="<?php echo ($this->input->post('specialite') ? $this->input->post('specialite') : $formateur['specialite']); ?>" class="form-control" id="specialite" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $formateur['telephone']); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo ($this->input->post('grade') ? $this->input->post('grade') : $formateur['grade']); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $formateur['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
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