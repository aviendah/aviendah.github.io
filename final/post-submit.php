<?php 
session_start();
include("top.html");

	if (isset($_POST['submit'])) {
		$post_title = $_POST['post_title'];
		$post_body = $_POST['post_body'];
		$poster = $_SESSION['name'];
		$post_array = array($poster, $post_title, $post_body);
		$post_string = PHP_EOL . implode("---", $post_array);
		file_put_contents("posts.txt", $post_string, FILE_APPEND);
		print $post_string;
?>
		
		<h2 class = "title">Thank you for your submission <?=$_SESSION["name"]?>!</h2>
		<p>
			<button onclick="window.location.href= 'forum.php';">
				Go to Forum Page
			</button>
		</p>
<?php	  
	}
?>




<?php include("bottom.html"); ?>