<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Brevets Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('brevet/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Brev Id</th>
						<th>Candidat Sid</th>
						<th>NumRef</th>
						<th>DateBrevet</th>
						<th>Pourcentage</th>
						<th>Mention</th>
						<th>CoteObtenue</th>
						<th>Specialite</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($brevets as $b){ ?>
                    <tr>
						<td><?php echo $b['brev_id']; ?></td>
						<td><?php echo $b['candidat_sid']; ?></td>
						<td><?php echo $b['numRef']; ?></td>
						<td><?php echo $b['dateBrevet']; ?></td>
						<td><?php echo $b['pourcentage']; ?></td>
						<td><?php echo $b['mention']; ?></td>
						<td><?php echo $b['coteObtenue']; ?></td>
						<td><?php echo $b['specialite']; ?></td>
						<td>
                            <a href="<?php echo site_url('brevet/edit/'.$b['brev_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('brevet/remove/'.$b['brev_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
