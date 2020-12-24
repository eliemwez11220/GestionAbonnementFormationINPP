<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Factures Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('facture/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Fac Id</th>
						<th>Numer Facture</th>
						<th>Date Facture</th>
						<th>Net A Payer</th>
						<th>Client Sid</th>
						<th>Etat Facture</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($factures as $f){ ?>
                    <tr>
						<td><?php echo $f['fac_id']; ?></td>
						<td><?php echo $f['numer_facture']; ?></td>
						<td><?php echo $f['date_facture']; ?></td>
						<td><?php echo $f['net_a_payer']; ?></td>
						<td><?php echo $f['client_sid']; ?></td>
						<td><?php echo $f['etat_facture']; ?></td>
						<td>
                            <a href="<?php echo site_url('facture/edit/'.$f['fac_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('facture/remove/'.$f['fac_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
