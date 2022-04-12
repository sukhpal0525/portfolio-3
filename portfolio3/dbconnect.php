<?php
$db_host = 'localhost';
$db_name = 'astoncv';
$username = 'root';
$password = '';

try {
	$db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo("Datbase connection failed.<br>" . $e->getMessage());
	exit;
}
?>

<!-- $db_host = 'localhost';
$db_name = 'astoncv';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo("Datbase connection failed.<br>" . $e->getMessage());
    exit;
} -->
