
<div class="modal-header">
	<!-- 			<h5 class="modal-title">{{isset($supplier)?'Edit':'Add New'}} Supplier</h5> -->
	<h5 class="modal-title">Create New Supplier</h5>
	<button id="closeForm" type="button" class="close" data-dismiss="modal"
		aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>

</div>

<div class="modal-body">
	<div class="form-control">
		<form id="form-supplier" method="POST">
			<div class="form-group row required">
				<label for="supplier_code" class="col-sm-4 control-label">Supplier
					Code</label> :
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier_code"
						name="supplier_code" placeholder="Enter supplier code" value=""
						required="required">
				</div>
			</div>

			<div class="form-group row required">
				<label for="supplier-name" class="col-sm-4 control-label">Supplier
					Name</label> :
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier_name"
						name="supplier_name" placeholder="Enter supplier name" value=""
						required="required">
				</div>
			</div>

			<div class="form-group row required">
				<label for="supplier-address" class="col-sm-4 control-label">Address</label>
				:
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier_address"
						name="supplier_address" placeholder="Enter supplier address"
						value="" required="required">
				</div>
			</div>

			<div class="form-group row">
				<label for="supplier-phone" class="col-sm-4 control-label">Phone</label>
				:
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier_phone"
						name="supplier_phone" placeholder="Enter supplier phone" value="">
				</div>
			</div>

			<div class="form-group row">
				<label for="supplier_whatsapp" class="col-sm-4 control-label">Whatsapp</label>
				:
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier-whatsapp"
						name="supplier_whatsapp" placeholder="Enter supplier whatsapp"
						value="">
				</div>
			</div>

			<div class="form-group row">
				<label for="supplier-facebook" class="col-sm-4 control-label">Facebook</label>
				:
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier-facebook"
						name="supplier_facebook" placeholder="Enter supplier facebook"
						value="">
				</div>
			</div>


			<div class="form-group row">
				<label for="supplier_instagram" class="col-sm-4 control-label">Instagram</label>
				:
				<div class="col-sm-5">
					<input type="text" class="form-control" id="supplier-instagram"
						name="supplier_instagram" placeholder="Enter supplier instagram"
						value="">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="modal-footer">
	<div class="form-group">
		<div class="col-md-12">
			<button type="submit" class="btn btn-raised btn-primary pull-right"
				id="submitSupplier">Submit</button>

		</div>
	</div>

</div>


<script>
/* must apply only after HTML has loaded */
$(document).ready(function () {
    $("#form-supplier").on("submit", function(e) {
        var postData = $(this).serializeArray();
       // var formURL = $(this).attr("action");
        $.ajax({
            url: 'view/supplier/insertSupplier.php',
            type: "POST",
            data: postData,
            success: function(response) {   
                 $('#modalForm .modal-header .modal-title').html("Result");
                 $('#modalForm .modal-body').html("Data berhasil ditambahkan");
                 $("#submitSupplier").remove();

            }
        });
        e.preventDefault();
    });
     
    $("#submitSupplier").on('click', function() {
        $("#form-supplier").submit();
    });

$('#modalForm').on('hidden.bs.modal', function () {
	var divContent = $('#cont');
	divContent.empty();
	divContent.load('view/supplier.php');

});
});
</script>