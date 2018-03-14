<?php
$db = new PDO("sqlite:db/db.sqlite");
if (isset($_POST["name"])){
	$ename = $_POST["name"];
	$eweight = $_POST["weight"];
	$edate = date('Ymd');
	$statement = $db->prepare("INSERT INTO exercise (name, weight, date) VALUES(:ename, :eweight, :edate)");
	$statement->bindParam(':ename', $ename, SQLITE3_TEXT);
	$statement->bindParam(':eweight', $ename, SQLITE3_TEXT);
	$statement->bindParam(':edate', $edate);
	$statement->execute();
	
}
// Go to the index after writing into the db
header('Location: index.php');
?>
