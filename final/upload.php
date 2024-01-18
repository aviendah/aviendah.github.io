<?php


	if (is_uploaded_file($_FILES["character"]["tmp_name"])){
		move_uploaded_file($_FILES["character"]["tmp_name"], 
		$_FILES["character"]["name"]);
	}

?>