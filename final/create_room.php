<?php 
session_start();
include("top.html"); ?>

<?php
	if (!isset($_SESSION['name'])) {
?>
		<p class = "please_login">Please login to post.</p> <br/>
		<button onclick="window.location.href= 'login.php';">
				Login
		</button>
<?php		
	} else {
?>

		<h1 class = "title">Post Your Room</h1>

		<form action="room-submit.php" method="post" enctype="multipart/form-data">
			<label>Title: </label><br/>
				<input type = "text" name = "room_title" size = "30"
					required = "required"/> <br/><br/>
			<label>Please provide a YouTube link to your video:</label><br/>
			<input type="url" name="room" id="room" required = "required" size = "30"/>
			<p>
				<label>Comments: </label><br />
				<textarea name = "comments" rows = "4" cols = "50">Type your comments here.
				</textarea> <br />
			</p>

		  <input type="submit" value="Post" name="submit">
		</form>
<?php
	}
	
	include("bottom.html"); 
?>