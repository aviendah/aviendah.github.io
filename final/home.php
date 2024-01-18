<?php 
session_start();
include("top.html"); 
?>
	<!-- <img src = "hippogriff.jpg" alt = "Hipogriff" class = "hipogriff"> -->
	<div id="welcome">
		<h1>Welcome to The Owlery!</h1>
		<h3> This is a community dedicated to Hogwarts Legacy.</h3>
		<p>Please log in or sign up to participate! <br/> <br/>
			<button onclick="window.location.href= 'login.php';">
				Login
			</button>
			<button onclick="window.location.href= 'signup.php';">
				Sign up
			</button>
		</p>
	</div>
	
	



<?php include("bottom.html"); ?>