 <!DOCTYPE html>
<html>
<head>
<title>Weightlifting log</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
$db = new SQLite3('db/db.sqlite');
$exercises = $db->query('SELECT * FROM exercise');
$curdate = date('Ymd');
$curex = $db->query('SELECT * FROM exercise WHERE date = '.$curdate.'');
?>
<table>
<thead>
<tr>
<th>Name</th>
<th>Weight</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<?php
while ($row = $curex->fetchArray()) {
	echo "<tr><td>".$row['name']."</td><td>".$row['weight']."</td><td>".$row['date']."</td></tr>";
}
?>
</tbody>
</table>
<a href="form.php">Form</a><br/>
<a href="details.php">Specify a day</a>
</body>
</html> 
