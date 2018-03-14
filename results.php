<link rel="stylesheet" type="text/css" href="css/style.css">

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
$db = new SQLite3('db/db.sqlite');
$specified_day = $db->query('SELECT * FROM exercise WHERE date = '.$_POST["date"].'');
while ($row = $specified_day->fetchArray()) {
	echo "<tr><td>".$row['NAME']."</td><td>".$row['WEIGHT']."</td><td>".$row['DATE']."</td></tr>";
}
?>
</tbody>
</table>

<a href="index.php">Index</a><br/>
<a href="form.php">Form</a>
