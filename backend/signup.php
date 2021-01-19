<?php
	require("../config.php");
	if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['phone']) && isset($_POST['email'])){
		$user  = $_POST['user'];
		$pass  = $_POST['pass'];
		$email  = $_POST['email'];
		$phone  = $_POST['phone'];
		if($db->createUser($user, $pass, $email, $phone)){
				echo 1;
		}
		else echo 0;
	}
?>