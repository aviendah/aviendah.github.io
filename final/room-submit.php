<?php 
session_start();
include("top.html");

	if (isset($_POST['submit'])) {
		$title = $_POST['room_title'];
		$video = $_POST['room'];
		$poster = $_SESSION['name'];
		$comments = $_POST['comments'];
		$post_array = array($poster, $title, $video, $comments);
		$post_string = PHP_EOL . implode("---", $post_array);
		$filename = "rooms.txt";
		file_put_contents($filename, $post_string, FILE_APPEND);
		
		
	}
?>
	<h1 class = "title">Thank you for your submission!</h1><br/>

<?php include("bottom.html"); ?>