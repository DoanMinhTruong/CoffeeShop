<?php
	require("../config.php");
	if(isset($_POST)){
		$id = $_POST['id'];
		unlink(("../".$db->getURL($id)['image']));
		
		$db->deleteItemById($id);
		echo ("../".$db->getURL($id)['image']);
	}


?>