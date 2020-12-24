<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Inscriptions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('inscription/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Ins Id</th>
						<th>Candidat Sid</th>
						<th>Formation Sid</th>
						<th>DateInscription</th>
						<th>StatutInscription</th>
						<th>DateValidation</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($inscriptions as $i){ ?>
                    <tr>
						<td><?php echo $i['ins_id']; ?></td>
						<td><?php echo $i['candidat_sid']; ?></td>
						<td><?php echo $i['formation_sid']; ?></td>
						<td><?php echo $i['dateInscription']; ?></td>
						<td><?php echo $i['statutInscription']; ?></td>
						<td><?php echo $i['dateValidation']; ?></td>
						<td><?php echo $i['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('inscription/edit/'.$i['ins_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('inscription/remove/'.$i['ins_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
