<?php

try {

	$r = mysql_connect("localhost","root","");

	if (!$r) {
		throw new Exception("Failed to connect to MySQL: " . mysql_error());
	}
	mysql_select_db('lifespan');

	$email = mysql_real_escape_string($_GET['email']);
	$name = mysql_real_escape_string($_GET['name']);
	$photo1 = mysql_real_escape_string($_GET['photo1']);
	$photo2 = mysql_real_escape_string($_GET['photo2']);
	$dontemail = !empty($_GET['dontemail']) ? 1 : 0;

	$sql = "INSERT INTO records SET email = '$email', name = '$name', time = " . time() . ", photo1 = '$photo1', photo2 = '$photo2', dontemail='$dontemail';";
	$result = mysql_query($sql, $r);

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