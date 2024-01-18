<?php 
session_start();
include("top.html"); ?>

	<h1 class = "title">Rooms of Requirement</h1>
	
	<p class = "post_button">
		<button onclick="window.location.href= 'create_room.php';">
					Post Your Room
		</button>
	</p>

<?php
	$file = file('rooms.txt');
	$reverse = array_reverse($file);
	
	foreach($reverse as $line) {
		$post_array = explode("---", $line);
		list($poster, $title, $video, $comments) = $post_array;
		$video_url = getYoutubeEmbedUrl($video);

?>

		<div class = "room_post">
			
			<h3 class = "room_title"><?=$title?></h3>
			<p class = "room_comments">
				<?=$comments?> <br/><br/>
				<span class = "poster">By: <?=$poster?></span>
			</p>
			
			<center><iframe width="560" height="315" src="<?=$video_url?>" 
				frameborder="0" allowfullscreen class = "video">
			</iframe></center>

		</div> 
<?php
	}
	
	
	function getYoutubeEmbedUrl($url) {
		 $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
		 $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

		if (preg_match($longUrlRegex, $url, $matches)) {
			$youtube_id = $matches[count($matches) - 1];
		}

		if (preg_match($shortUrlRegex, $url, $matches)) {
			$youtube_id = $matches[count($matches) - 1];
		}
		return 'https://www.youtube.com/embed/' . $youtube_id ;
	}
?>
	

<?php include("bottom.html"); ?>