<?php 
session_start();
include("top.html"); ?>

	<h1 class = "title">Characters</h1>
	
	<p class = "post_button">
		<button onclick="window.location.href= 'create_char.php';">
					Post Your Character
		</button>
	</p>
<?php
	$file = file('characters.txt');
	$reverse = array_reverse($file);
	
	foreach($reverse as $line) {
		$post_array = explode("---", $line);
		list($name, $poster, $comments, $image) = $post_array;
?>
		<div class = "character_post">
			<h3 class = "char_name"><?=$name?></h3>
			<p class = "char_comments">
				<?=$comments?> <br/><br/>
				<span class = "poster">By: <?=$poster?></span>
			</p>
			<img class = "char_img" src = "<?=$image?>" alt = "<?=$name?>">
		</div>
<?php

	}
	
 include("bottom.html"); 
 ?>