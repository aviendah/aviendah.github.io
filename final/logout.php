<?php 
	session_start();
	session_destroy();
	include("top.html"); 
	

?>

	<h1 class = "title">You are now logged out.</h1>

<?php include("bottom.html"); ?>