<?php 
require_once '../model/SupplierModel.php';
require_once '../controller/Utility.php';

    use model\SupplierModel;
    use controller\Utility;
    
    
    $supplier = new SupplierModel('mysql');
    $listSupplier = $supplier->getAllSupplier();
?>

<div class="h3">List Supplier</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Supplier Code</th>
			<th>Supplier Name</th>
			<th>Address</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
		<?php 
    		if($listSupplier->num_rows > 0){
    		    while($row = $listSupplier->fetch_assoc()){
    		        ?>
    		        	<tr>
                			<td><?=$row["SEQ"]?></td>
                			<td><?=$row["SUPPLIER_CODE"]?></td>
                			<td><?=$row["SUPPLIER_NAME"]?></td>
                			<td><?=$row["ADDRESS"]?></td>
                			<td><?=$row["PHONE_NUMBER"]?></td>
                		</tr>
    		        <?php
    		    }
    		}
		?>	
	</tbody>
</table>