

<?php
	//include("connection.php");
	if(isset($_POST['register'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phno = $_POST['ph_no'];
		$type = $_POST['type'];

		echo "<script>alert('Name : $name , Email : $email , ph_no = $phno , type : $type')</script>";

	}

?>