<?php
/*
	Created by: Tatum Manning
	
*/
	session_start();
	include "top.html";
	
?>
	<h1 class = "title">Login</h1>
	

	
	<!-- This form allows users to log in to The Owlery.-->
		<form action = "login-submit.php"
			method = "get" enctype = "multipart/form-data">
			<fieldset>
			
				<legend>Returning User:</legend>
				
				<label>Username: </label>
					<input name = "name" size = "16"/><br/>
				<label>Password: </label> 
					<input type = "password" name = "password"  size = "16"/> <br/>
				
				<input type = "submit" value = "Log In" name = "login"/>
				<input type = "reset" value = "Clear"/>				
			</fieldset>
		</form>
		
		<p class = "not_member">Not a member?
			<button onclick="window.location.href= 'signup.php';">
				Sign up
			</button>
		</p>
	

<?php
	include "bottom.html";
	
?>