<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Formateurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('formateur/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Ens Id</th>
						<th>Matricule</th>
						<th>Noms</th>
						<th>Specialite</th>
						<th>Telephone</th>
						<th>Grade</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($formateurs as $f){ ?>
                    <tr>
						<td><?php echo $f['ens_id']; ?></td>
						<td><?php echo $f['matricule']; ?></td>
						<td><?php echo $f['noms']; ?></td>
						<td><?php echo $f['specialite']; ?></td>
						<td><?php echo $f['telephone']; ?></td>
						<td><?php echo $f['grade']; ?></td>
						<td><?php echo $f['email']; ?></td>
						<td>
                            <a href="<?php echo site_url('formateur/edit/'.$f['ens_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('formateur/remove/'.$f['ens_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
