<!DOCTYPE html>
<html>
<head>
<title>Weightlifting log</title>
<link rel="stylesheet" type="text/css" href="files/style.css">
</head>
<body>
<?php
$db = new SQLite3('db/db.sqlite');
$exercises = $db->query('SELECT * FROM exercise');
$curdate = date('Ymd');
$curex = $db->query('SELECT * FROM exercise WHERE date = '.$curdate.'');
$date_details = $db->query('SELECT DISTINCT date FROM exercise');
$selected_date = $_POST['dates'];
?>
<form action="results.php" method="post">
<select name="date">
<?php
while ($row = $date_details->fetchArray()) {
	echo '<option value="'.$row['date'].'">'.$row['date'].'</option>'.PHP_EOL;
}
?>
</select>
<input type="submit" value="Submit"/>
</form>
<?php
//echo $curdate;
echo $selected_date;
?>
<a href="index.php">Index</a>
</body>
</html> 
