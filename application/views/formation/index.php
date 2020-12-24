<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Formations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('formation/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Forma Id</th>
						<th>Domaine Sid</th>
						<th>NumRef</th>
						<th>IntituleSession</th>
						<th>StatutSession</th>
						<th>Datedebut</th>
						<th>DateFin</th>
						<th>Duree</th>
						<th>Prix</th>
						<th>Prerequis</th>
						<th>Objectifs</th>
						<th>Outils</th>
						<th>Contenu</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($formations as $f){ ?>
                    <tr>
						<td><?php echo $f['forma_id']; ?></td>
						<td><?php echo $f['domaine_sid']; ?></td>
						<td><?php echo $f['numRef']; ?></td>
						<td><?php echo $f['intituleSession']; ?></td>
						<td><?php echo $f['statutSession']; ?></td>
						<td><?php echo $f['datedebut']; ?></td>
						<td><?php echo $f['DateFin']; ?></td>
						<td><?php echo $f['Duree']; ?></td>
						<td><?php echo $f['Prix']; ?></td>
						<td><?php echo $f['Prerequis']; ?></td>
						<td><?php echo $f['Objectifs']; ?></td>
						<td><?php echo $f['Outils']; ?></td>
						<td><?php echo $f['Contenu']; ?></td>
						<td>
                            <a href="<?php echo site_url('formation/edit/'.$f['forma_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('formation/remove/'.$f['forma_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
