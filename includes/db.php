<?php

$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if ($connection == false) {
	echo 'Connection ERROR! <br>';
	echo mysqli_connect_error();
	exit();
}
?>