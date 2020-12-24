<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Formation Add</h3>
            </div>
            <?php echo form_open('formation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="domaine_sid" class="control-label"><span class="text-danger">*</span>Domaine</label>
						<div class="form-group">
							<select name="domaine_sid" class="form-control">
								<option value="">select domaine</option>
								<?php 
								foreach($all_domaines as $domaine)
								{
									$selected = ($domaine['dom_id'] == $this->input->post('domaine_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$domaine['dom_id'].'" '.$selected.'>'.$domaine['intituleDom'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('domaine_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numRef" class="control-label"><span class="text-danger">*</span>NumRef</label>
						<div class="form-group">
							<input type="text" name="numRef" value="<?php echo $this->input->post('numRef'); ?>" class="form-control" id="numRef" />
							<span class="text-danger"><?php echo form_error('numRef');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="intituleSession" class="control-label"><span class="text-danger">*</span>IntituleSession</label>
						<div class="form-group">
							<input type="text" name="intituleSession" value="<?php echo $this->input->post('intituleSession'); ?>" class="form-control" id="intituleSession" />
							<span class="text-danger"><?php echo form_error('intituleSession');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="statutSession" class="control-label">StatutSession</label>
						<div class="form-group">
							<input type="text" name="statutSession" value="<?php echo $this->input->post('statutSession'); ?>" class="form-control" id="statutSession" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="datedebut" class="control-label">Datedebut</label>
						<div class="form-group">
							<input type="text" name="datedebut" value="<?php echo $this->input->post('datedebut'); ?>" class="has-datepicker form-control" id="datedebut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DateFin" class="control-label">DateFin</label>
						<div class="form-group">
							<input type="text" name="DateFin" value="<?php echo $this->input->post('DateFin'); ?>" class="has-datepicker form-control" id="DateFin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Duree" class="control-label">Duree</label>
						<div class="form-group">
							<input type="text" name="Duree" value="<?php echo $this->input->post('Duree'); ?>" class="form-control" id="Duree" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Prix" class="control-label">Prix</label>
						<div class="form-group">
							<input type="text" name="Prix" value="<?php echo $this->input->post('Prix'); ?>" class="form-control" id="Prix" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Prerequis" class="control-label">Prerequis</label>
						<div class="form-group">
							<textarea name="Prerequis" class="form-control" id="Prerequis"><?php echo $this->input->post('Prerequis'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Objectifs" class="control-label">Objectifs</label>
						<div class="form-group">
							<textarea name="Objectifs" class="form-control" id="Objectifs"><?php echo $this->input->post('Objectifs'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Outils" class="control-label">Outils</label>
						<div class="form-group">
							<textarea name="Outils" class="form-control" id="Outils"><?php echo $this->input->post('Outils'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Contenu" class="control-label">Contenu</label>
						<div class="form-group">
							<textarea name="Contenu" class="form-control" id="Contenu"><?php echo $this->input->post('Contenu'); ?></textarea>
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