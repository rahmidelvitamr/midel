<?php
 
	// Check If form submitted, insert form data into users table.
	//if(isset($_POST['Submit'])) {
		$code = $_POST['supplier_code'];
		$name = $_POST['supplier_name'];
		$address = $_POST['supplier_address'];
		$phone = $_POST['supplier_phone'];
		$whatsapp = $_POST['supplier_whatsapp'];
		$facebook = $_POST['supplier_facebook'];
		$instagram = $_POST['supplier_instagram'];
		// include database connection file

		
		$host = "127.0.0.1";
		$user = "root";
		$password = "123456";
		$cnn = mysqli_connect($host, $user, $password);
		$sql = "INSERT INTO midelsys.M_SUPPLIER (SUPPLIER_CODE, SUPPLIER_NAME, ADDRESS, PHONE, WHATSAPP_ACCOUNT, FACEBOOK_ACCOUNT, INSTAGRAM_ACCOUNT) values ('$_POST[supplier_code]', '$_POST[supplier_name]', '$_POST[supplier_address]', '$_POST[supplier_phone]', '$_POST[supplier_whatsapp]', '$_POST[supplier_facebook]', '$_POST[supplier_instagram]' )";
		$result = mysqli_query($cnn, $sql);
		if ($result == false) {
		    echo "Error: " . mysqli_error($cnn);
		}
//	}
	?>
