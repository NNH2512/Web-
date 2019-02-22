<?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=loginsystem","root", "", array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
	print "Error: " . $e->getMessage() . "<br/>";
	die();
}
// function getDB(){
//	$database_string = "mysql:host=localhost;dbname=loginsystem";
//	$database_username = "root";
//	$database_password = "";
//   static $db = null;
//   if($db == null){
//     try {
//       $db = new PDO($database_string,$database_username,$database_password);
//       $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//       $db->exec("SET NAMES 'utf8'");
//     } catch (Exception $e){
//       echo 'Could not connect to the database. 105';
//       exit();
//     }
//   }
//   return $db;
// };
