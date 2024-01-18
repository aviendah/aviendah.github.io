<?php 
session_start();
include("top.html");

	if (isset($_POST['submit'])) {
		if (is_uploaded_file($_FILES["character"]["tmp_name"])){
			
			move_uploaded_file($_FILES["character"]["tmp_name"], 
			$_FILES["character"]["name"]);
		} else {
			print "Error loading file. Please try again.";
		}
		
		$name = $_POST['char_name'];
		$poster = $_SESSION['name'];
		$image = $_FILES['character']['name'];
		$comments = $_POST['comments'];
		$post_array = array($name, $poster, $comments, $image);
		$post_string = PHP_EOL . implode("---", $post_array);
		file_put_contents("characters.txt", $post_string, FILE_APPEND);
	
	}	
?>
		<h1 class = "title">Thank you for your submission!</h1><br/>

<?php include("bottom.html"); ?>