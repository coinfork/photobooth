<?php

try {

	$r = mysql_connect("localhost","root","");

	if (!$r) {
		throw new Exception("Failed to connect to MySQL: " . mysql_error());
	}
	mysql_select_db('lifespan');

	$email = mysql_real_escape_string($_GET['email']);
	$name = mysql_real_escape_string($_GET['name']);

	$sql = "INSERT INTO records SET email = '$email', name = '$name', time = " . time() . ";";
	$result = mysql_query($sql, $r);
	die(var_dump($result));

	/*while($row = mysql_fetch_array($result)) {
		echo $row['email'] . " " . $row['name'];
		echo "<br>";
	}*/

	mysql_close();


} catch (Exception $e) {
	die(json_encode(array(
		'success' => false,
		'error' => $e->getMessage()
	)));
}

die(json_encode(array(
	'success' => true
)));