<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Domaine Edit</h3>
            </div>
			<?php echo form_open('domaine/edit/'.$domaine['dom_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="dateAjout" class="control-label">DateAjout</label>
						<div class="form-group">
							<input type="text" name="dateAjout" value="<?php echo ($this->input->post('dateAjout') ? $this->input->post('dateAjout') : $domaine['dateAjout']); ?>" class="has-datetimepicker form-control" id="dateAjout" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intituleDom" class="control-label"><span class="text-danger">*</span>IntituleDom</label>
						<div class="form-group">
							<input type="text" name="intituleDom" value="<?php echo ($this->input->post('intituleDom') ? $this->input->post('intituleDom') : $domaine['intituleDom']); ?>" class="form-control" id="intituleDom" />
							<span class="text-danger"><?php echo form_error('intituleDom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $domaine['observation']); ?></textarea>
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