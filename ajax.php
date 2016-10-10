<?php
	$data[0] = ($_POST['sex']);
	$data[1] = ($_POST['age']);
	$data[2] = ($_POST['clinic']);
	$data[3] = ($_POST['help']);
	$data[4] = ($_POST['stom']);
	echo json_encode($data);
?>