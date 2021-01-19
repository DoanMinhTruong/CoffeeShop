<?php
	require("../config.php");
	if(isset($_POST['user']) &&  isset($_POST['pass'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if($db->Login($user, $pass)){
			$_SESSION['user'] = $user;
			echo 1;
		}else echo 0;
	}
?>