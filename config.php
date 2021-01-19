<?php
	require("classes/DB.php");
	$db = new DB();
	$db->connect();
	$db->init();
	session_start();
?>