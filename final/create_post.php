<?php 
session_start();
include("top.html"); ?>

	<h1 class = "title">Create a Post</h1>
	
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
	
		<form action="post-submit.php" method="post" enctype="multipart/form-data">
			<p>
				<label>Title: </label>
				<input type = "text" name = "post_title" size = "30"
					required = "required"/> <br/>
				<label>Post: </label> <br/>
					<textarea name = "post_body" rows = "4" 
						cols = "50">Enter your comments here.
					</textarea> <br/>
				
				<input type="submit" value="Submit" name="submit">
			</p>
		</form>

<?php 
	}
include("bottom.html"); 
?>