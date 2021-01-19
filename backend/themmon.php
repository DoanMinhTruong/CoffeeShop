<?php
	require("../config.php");
	if(isset($_POST) && !empty($_FILES['file'])){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$ended = explode('.',$_FILES['file']['name']);
		$ended = $ended[(count($ended)-1)];
		
		if ($ended === 'jpg' || $ended === 'png' || $ended === 'gif' || $ended ==='jpeg'){
			if(!file_exists("public/" .$_FILES['file']['name']))
			{
				if($db->insertMenu($name , $price, "public/" .$_FILES['file']['name'])){
					if (move_uploaded_file($_FILES['file']['tmp_name'], "../public/".$_FILES['file']['name']))	
						echo "1";
					else echo "0";
				}
				else echo "0";
			}else echo "0";
		}
		else echo "0";

	}
	else echo "0";
?>