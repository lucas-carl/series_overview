<?php
// DB information
$host_name 	= "localhost";
$database 	= "movieapp";
$user_name 	= "root";
$password 	= "root";

// Create connection
$connect = new mysqli($host_name, $user_name, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect_connect_error());
}

function generateUniqueId($maxLength = null) {
	$entropy = uniqid(mt_rand(), true);

	$hash = hash('whirlpool', $entropy);
	if ($maxLength) {
		return substr($hash, 0, $maxLength);
	}
	return $hash;
}

//echo generateUniqueId(9) ." ";
?>
