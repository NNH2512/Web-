<?php
if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	$bank_amount =  filter_var($_POST['bank_amount'], FILTER_VALIDATE_INT);
	$bank_type    = $_POST['Bank'];

	if ( empty( $bank_amount ) || empty( $bank_type ) ) {
		header( "Location: ../index.php?new_account=empty" );
		exit();
	} else {
		$sql =  "INSERT INTO new_account(bank_amount,bank_Type) VALUES(?,?)";
		$result = $conn->prepare($sql);
		$result->bindParam(1,$bank_amount,PDO::PARAM_INT);
		$result->bindParam(2,$bank_type,PDO::PARAM_STR);
		$result->execute();
		if ($result) {
			header( "Location:../Data.php?new_account=success" );
			exit();
		} else {
			header("Location:../Data.php?new_account=no_information");
		}
	}
} else {
	header("Location:../Data.php?new_account=failed");
	exit();
	}
