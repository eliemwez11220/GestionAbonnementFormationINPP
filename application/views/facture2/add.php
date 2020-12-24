<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Facture Add</h3>
            </div>
            <?php echo form_open('facture/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="numer_facture" class="control-label">Numer Facture</label>
						<div class="form-group">
							<input type="text" name="numer_facture" value="<?php echo $this->input->post('numer_facture'); ?>" class="form-control" id="numer_facture" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_facture" class="control-label">Date Facture</label>
						<div class="form-group">
							<input type="text" name="date_facture" value="<?php echo $this->input->post('date_facture'); ?>" class="has-datetimepicker form-control" id="date_facture" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="net_a_payer" class="control-label">Net A Payer</label>
						<div class="form-group">
							<input type="text" name="net_a_payer" value="<?php echo $this->input->post('net_a_payer'); ?>" class="form-control" id="net_a_payer" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_sid" class="control-label">Client Sid</label>
						<div class="form-group">
							<input type="text" name="client_sid" value="<?php echo $this->input->post('client_sid'); ?>" class="form-control" id="client_sid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="etat_facture" class="control-label">Etat Facture</label>
						<div class="form-group">
							<input type="text" name="etat_facture" value="<?php echo $this->input->post('etat_facture'); ?>" class="form-control" id="etat_facture" />
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