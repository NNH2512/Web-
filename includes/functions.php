<?php
//require_once ("dbh.inc.php");
function show_bank_type_list() {
	include( "dbh.inc.php" );
	try {
		$query = "SELECT DISTINCT(bank_Type) FROM new_account ORDER BY id";
	} catch ( Exception $e ) {
		echo "Error";
		exit();
	}
	$result = $conn->query( $query );
	$rows = $result->fetchAll( PDO::FETCH_ASSOC);
	$data = "";
	foreach ($rows as $value) {


//		$data .= "<option selected=\"selected\" value='". $value['bank_Type'] ."  '>"  . $value['bank_Type']. "</option>";
		$data .= "<option value='". $value['bank_Type'] ."  '>"  . $value['bank_Type']. "</option>";
//		$data .= $value['bank_Type'];
	};
	return $data;
}


//function show_wallet($amount) {
//	$amount = "" ;
//	include("dbh.inc.php");
//	try {
//		$sql = " SELECT bank_amount FROM new_account WHERE bank_Type = :now";
//	} catch (Exception $e) {
//		echo "Error";
//		exit();
//	}
//	$result = $conn->prepare($sql);
//	$result->bindParam(':now',$amount,PDO::PARAM_INT);
//	$result->execute();
//	return $result;
//}


