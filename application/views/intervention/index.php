<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Interventions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('intervention/add'); ?>" class="btn btn-success btn-sm">Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Inter Id</th>
						<th>Formateur Sid</th>
						<th>Formation Sid</th>
						<th>DateInterv</th>
						<th>StatutInter</th>
						<th>EffectifCandidats</th>
						<th>MatiereVue</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($interventions as $i){ ?>
                    <tr>
						<td><?php echo $i['inter_id']; ?></td>
						<td><?php echo $i['formateur_sid']; ?></td>
						<td><?php echo $i['formation_sid']; ?></td>
						<td><?php echo $i['dateInterv']; ?></td>
						<td><?php echo $i['statutInter']; ?></td>
						<td><?php echo $i['effectifCandidats']; ?></td>
						<td><?php echo $i['matiereVue']; ?></td>
						<td><?php echo $i['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('intervention/edit/'.$i['inter_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('intervention/remove/'.$i['inter_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
