<?php 

//connection String

$dsn = "mysql:host=localhost; dbname=pdo_db;";
$db_user = "root";
$db_password = "";




try {

	//connection String
	$con = new PDO($dsn,$db_user,$db_password);
	echo "Connected.....";

} catch (PDOException $e) {
	echo "Sorry Not Connected...";
	echo "Sorry Not Connected...".$e->getMessage(); //this is for debug purpose for developer
}

 

?>
