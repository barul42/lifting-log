<?php
$db = new SQLite3('db/db.sqlite');
if (isset($_POST["name"])){
	$ename = $_POST["name"];
	$eweight = $_POST["weight"];
	$edate = date('Ymd');
	$db->exec("INSERT INTO exercise (name, weight, date) VALUES('$ename', '$eweight', '$edate');");
}
// Go to the index after writing into the db
header('Location: index.php');
?>
