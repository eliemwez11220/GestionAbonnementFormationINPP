<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Im User Edit</h3>
            </div>
			<?php echo form_open('tb_im_user/edit/'.$tb_im_user['id_asset']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="asset_password" class="control-label">Asset Password</label>
						<div class="form-group">
							<input type="text" name="asset_password" value="<?php echo ($this->input->post('asset_password') ? $this->input->post('asset_password') : $tb_im_user['asset_password']); ?>" class="form-control" id="asset_password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_fullname" class="control-label">Asset Fullname</label>
						<div class="form-group">
							<input type="text" name="asset_fullname" value="<?php echo ($this->input->post('asset_fullname') ? $this->input->post('asset_fullname') : $tb_im_user['asset_fullname']); ?>" class="form-control" id="asset_fullname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_username" class="control-label">Asset Username</label>
						<div class="form-group">
							<input type="text" name="asset_username" value="<?php echo ($this->input->post('asset_username') ? $this->input->post('asset_username') : $tb_im_user['asset_username']); ?>" class="form-control" id="asset_username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_email" class="control-label">Asset Email</label>
						<div class="form-group">
							<input type="text" name="asset_email" value="<?php echo ($this->input->post('asset_email') ? $this->input->post('asset_email') : $tb_im_user['asset_email']); ?>" class="form-control" id="asset_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_sexe" class="control-label">Asset Sexe</label>
						<div class="form-group">
							<input type="text" name="asset_sexe" value="<?php echo ($this->input->post('asset_sexe') ? $this->input->post('asset_sexe') : $tb_im_user['asset_sexe']); ?>" class="form-control" id="asset_sexe" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_phone" class="control-label">Asset Phone</label>
						<div class="form-group">
							<input type="text" name="asset_phone" value="<?php echo ($this->input->post('asset_phone') ? $this->input->post('asset_phone') : $tb_im_user['asset_phone']); ?>" class="form-control" id="asset_phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_type" class="control-label">Asset Type</label>
						<div class="form-group">
							<input type="text" name="asset_type" value="<?php echo ($this->input->post('asset_type') ? $this->input->post('asset_type') : $tb_im_user['asset_type']); ?>" class="form-control" id="asset_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_ajout" class="control-label">Date Ajout</label>
						<div class="form-group">
							<input type="text" name="date_ajout" value="<?php echo ($this->input->post('date_ajout') ? $this->input->post('date_ajout') : $tb_im_user['date_ajout']); ?>" class="form-control" id="date_ajout" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_connected" class="control-label">Date Connected</label>
						<div class="form-group">
							<input type="text" name="date_connected" value="<?php echo ($this->input->post('date_connected') ? $this->input->post('date_connected') : $tb_im_user['date_connected']); ?>" class="form-control" id="date_connected" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="account_activated" class="control-label">Account Activated</label>
						<div class="form-group">
							<input type="text" name="account_activated" value="<?php echo ($this->input->post('account_activated') ? $this->input->post('account_activated') : $tb_im_user['account_activated']); ?>" class="form-control" id="account_activated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_avatar" class="control-label">Asset Avatar</label>
						<div class="form-group">
							<input type="text" name="asset_avatar" value="<?php echo ($this->input->post('asset_avatar') ? $this->input->post('asset_avatar') : $tb_im_user['asset_avatar']); ?>" class="form-control" id="asset_avatar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_update" class="control-label">Date Update</label>
						<div class="form-group">
							<input type="text" name="date_update" value="<?php echo ($this->input->post('date_update') ? $this->input->post('date_update') : $tb_im_user['date_update']); ?>" class="has-datetimepicker form-control" id="date_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_fonction" class="control-label">Asset Fonction</label>
						<div class="form-group">
							<input type="text" name="asset_fonction" value="<?php echo ($this->input->post('asset_fonction') ? $this->input->post('asset_fonction') : $tb_im_user['asset_fonction']); ?>" class="form-control" id="asset_fonction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_matricule" class="control-label">Asset Matricule</label>
						<div class="form-group">
							<input type="text" name="asset_matricule" value="<?php echo ($this->input->post('asset_matricule') ? $this->input->post('asset_matricule') : $tb_im_user['asset_matricule']); ?>" class="form-control" id="asset_matricule" />
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