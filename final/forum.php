<?php 
session_start();
include("top.html"); ?>

	<h1 class = "title">Forum</h1>
	
	<p class = "post_button">
		<button onclick="window.location.href= 'create_post.php';">
					Create New Post
		</button>
	</p>

<?php
	$file = file('posts.txt');
	$reverse = array_reverse($file);
	
	foreach($reverse as $line) {
		$post_array = explode("---", $line);
		list($poster, $post_title, $post_body) = $post_array;
?>
		<div class = "forum_post">
			<h4 class = "post_title"><?=$post_title?></h4>
			<p class = "poster"><strong>by: <?=$poster?></strong></p>
			<p class = "post_body"><?=$post_body?></p>
		</div>
<?php		
	}
?>

<?php include("bottom.html"); ?>