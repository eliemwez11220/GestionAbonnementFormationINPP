<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Domaines Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('domaine/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Dom Id</th>
						<th>DateAjout</th>
						<th>IntituleDom</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($domaines as $d){ ?>
                    <tr>
						<td><?php echo $d['dom_id']; ?></td>
						<td><?php echo $d['dateAjout']; ?></td>
						<td><?php echo $d['intituleDom']; ?></td>
						<td><?php echo $d['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('domaine/edit/'.$d['dom_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('domaine/remove/'.$d['dom_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
