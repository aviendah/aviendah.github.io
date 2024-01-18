<?php 
session_start();
include("top.html"); ?>

	<h1 class = "title">Post Your Character</h1>
	
	
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
	
		<form action="char-submit.php" method="post" enctype="multipart/form-data">
			<label>Name: </label>
				<input type = "text" name = "char_name" size = "30"
					required = "required"/> <br/><br/>
			
			<label>Select image to upload: </label>
				<input type="file" name="character"> <br/>
			<p>
				<label>Comments: </label><br />
					<textarea name = "comments" rows = "4" cols = "50">
					</textarea> <br />
			</p>
		  

		  <input type="submit" value="Post" name="submit">
		</form>
<?php 
	}

	include("bottom.html"); 
?>