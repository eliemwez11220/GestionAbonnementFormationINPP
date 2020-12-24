<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Im Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_im_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Asset</th>
						<th>Asset Password</th>
						<th>Asset Fullname</th>
						<th>Asset Username</th>
						<th>Asset Email</th>
						<th>Asset Sexe</th>
						<th>Asset Phone</th>
						<th>Asset Type</th>
						<th>Date Ajout</th>
						<th>Date Connected</th>
						<th>Account Activated</th>
						<th>Asset Avatar</th>
						<th>Date Update</th>
						<th>Asset Fonction</th>
						<th>Asset Matricule</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_im_users as $t){ ?>
                    <tr>
						<td><?php echo $t['id_asset']; ?></td>
						<td><?php echo $t['asset_password']; ?></td>
						<td><?php echo $t['asset_fullname']; ?></td>
						<td><?php echo $t['asset_username']; ?></td>
						<td><?php echo $t['asset_email']; ?></td>
						<td><?php echo $t['asset_sexe']; ?></td>
						<td><?php echo $t['asset_phone']; ?></td>
						<td><?php echo $t['asset_type']; ?></td>
						<td><?php echo $t['date_ajout']; ?></td>
						<td><?php echo $t['date_connected']; ?></td>
						<td><?php echo $t['account_activated']; ?></td>
						<td><?php echo $t['asset_avatar']; ?></td>
						<td><?php echo $t['date_update']; ?></td>
						<td><?php echo $t['asset_fonction']; ?></td>
						<td><?php echo $t['asset_matricule']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_im_user/edit/'.$t['id_asset']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_im_user/remove/'.$t['id_asset']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
