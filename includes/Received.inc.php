<?php
//require_once "functions.php";
if (isset($_GET['submit'])) {
	include_once 'dbh.inc.php';
	$received_type = $_GET["receive_type"];
	$amount_money = filter_input( INPUT_GET, 'amount', FILTER_SANITIZE_NUMBER_INT );
	$detail       = filter_input( INPUT_GET, 'detail', FILTER_SANITIZE_STRING );
	$date         = $_GET['date'];

	if ( empty( $amount_money ) ) {
		header( 'Location: ../Data.php?money_empty' );
		exit();
	} else {
		$sql    = "INSERT INTO received(received_type,amount,detail,receive_date)
				VALUES (:receive_type,:amount,:detail,:payment_date)";
		$result = $conn->prepare($sql);
		$result->bindParam( ':receive_type', $received_type, PDO::PARAM_STR );
		$result->bindParam( ':amount', $amount_money, PDO::PARAM_INT );
		$result->bindParam( ':detail', $detail, PDO::PARAM_STR );
		$result->bindParam( ':payment_date', $date, PDO::PARAM_STR );
		$result->execute();
		if ( $result ) {
			header( "Location: ../Data.php?receive_success" );
			exit();
		} else {
			header( "Location: ../Data.php?receive_no_success" );
		}
	}
} else {
	header("Location: ../Data.php?failed");
}
