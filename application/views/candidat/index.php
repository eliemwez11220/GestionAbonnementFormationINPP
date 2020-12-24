<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Candidats Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('candidat/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Cand Id</th>
						<th>Sexe</th>
						<th>EtatCivil</th>
						<th>Noms</th>
						<th>Adresse</th>
						<th>Telephone</th>
						<th>DateNaissance</th>
						<th>LieuNaissance</th>
						<th>Profession</th>
						<th>NiveauEtude</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($candidats as $c){ ?>
                    <tr>
						<td><?php echo $c['cand_id']; ?></td>
						<td><?php echo $c['sexe']; ?></td>
						<td><?php echo $c['etatCivil']; ?></td>
						<td><?php echo $c['noms']; ?></td>
						<td><?php echo $c['adresse']; ?></td>
						<td><?php echo $c['telephone']; ?></td>
						<td><?php echo $c['dateNaissance']; ?></td>
						<td><?php echo $c['lieuNaissance']; ?></td>
						<td><?php echo $c['profession']; ?></td>
						<td><?php echo $c['niveauEtude']; ?></td>
						<td>
                            <a href="<?php echo site_url('candidat/edit/'.$c['cand_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('candidat/remove/'.$c['cand_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
