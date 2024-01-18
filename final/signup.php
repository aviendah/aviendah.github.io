<?php
/*
	Created by: Tatum Manning

*/	
	include "top.html";
	
?>
	<h1 class = "title">Sign Up</h1>
	
	<!-- This is the form for users to input information and sign up.-->
		<form action = "signup-submit.php"
			method = "post">
			<fieldset>
				<legend>New User Signup:</legend>
				<label class = "signup">Username: </label>
					<input name = "name" size = "16" maxlength = "15" 
						required = "required"/><br/>
					
				<label class = "signup">Password: </label> 
					<input type = "password" name = "password" 
						required = "required"  size = "16"/> <br/>
					
				<label class = "signup">Hogwarts House: </label>
					<label><input type = "radio" name = "house" 
						value = "Gryffindor"/>Gryffindor</label>
					<label><input type = "radio" name = "house" 
						value = "Ravenclaw"/>Ravenclaw</label>
					<label><input type = "radio" name = "house" 
						value = "Slytherin"/>Slytherin</label>
					<label><input type = "radio" name = "house" 
						value = "Hufflepuff"/>Hufflepuff</label></br/>
			
					&lpar; 
					<a class = "house_link" href = "http://wizardmore.com/sorting-hat/"
					target = "_blank">
						Don't know your house?</a>
					&rpar;
					 <br/>
					 <br/>
				
				<input type = "submit" value = "Sign Up"/>
			</fieldset>
		</form>
			
<?php
	include "bottom.html";
	
?>