<?php
require_once '../model/SupplierModel.php';
require_once '../controller/Utility.php';

use model\SupplierModel;
use controller\Utility;

$supplier = new SupplierModel('mysql');
$listSupplier = $supplier->getAllSupplier();

?>

<div class="h3">List Supplier</div>
<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Supplier Code</th>
				<th>Supplier Name</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Social Media</th>>
				<th>Action</th>>
			</tr>
		</thead>
		<tbody>	
		<?php
$no = 1;
if ($listSupplier->num_rows > 0) {
    while ($row = $listSupplier->fetch_assoc()) {
        ?>
    		        <tr>
				<td><?=$no?></td>
				<td><?=$row['supplier_code']?></td>
				<td><?=$row['supplier_name']?></td>
				<td><?=$row['address']?></td>
				<td><?=$row['phone']?></td>
				<td>
					<ul>
						<li><span><i class="fab fa-whatsapp"></i></span> <span><?=$row['whatsapp_account']?></span></li>
						<li><span><i class="fab fa-facebook"></i></span> <span><?=$row['facebook_account']?></span></li>
						<li><span><i class="fab fa-instagram"></i></span><span><?=$row['instagram_account']?></span></li>
					</ul>
				</td>
				<td><span> <i class="fa fa-edit" id=<?=$row['supplier_code']?>
						onclick="editSupplier(this);" data-toggle="modal"
						data-target="#modalFormEdit"></i>
				</span> <span> <i class="fa fa-trash" id=<?=$row['supplier_code']?>
						onclick="deleteSupplier(this);" data-toggle="confirmation"></i>
				</span></td>
			</tr>

<?php
        $no ++;
    }
}
?>
	</table>

	<div class="col-sm-6 col-md-6">
		<a class="btn btn-primary"  value="0" onclick="showFormSupplier();"> <i
			class="fa fa-plus"></i> ADD NEW SUPPLIER
		</a>
	</div>
</div>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog"
	data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="modal_content">


		</div>
	</div>
</div>
