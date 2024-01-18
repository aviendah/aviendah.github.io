<?php
/*
	Created by: Tatum Manning
	
	This page is designed to allow the user to enter their information
	and sign up for a dating site. Hitting submit adds the information provided
	to a text file called singles.txt.
*/	
	include "top.html";
	
?>
	<!-- This is the form for users to input information -->
		<form action = "signup-submit.php"
			method = "post">
			<fieldset>
				<legend>New User Signup:</legend>
				<label class = "column"><strong>Name:</strong> </label>
					<input name = "id" size = "16"/><br/>
					
				<label class = "column"><strong>Gender:</strong> </label>
					<label><input type = "radio" name = "gender" 
						value = "F"/>Female</label>
					<label><input type = "radio" name = "gender" 
						value = "M"/>Male</label></br/>
						
				<label class = "column"><strong>Age:</strong> </label>
					<input name = "age" size = "6" maxlength = "2"/><br/>
					
				<label class = "column"><strong>Personality type:</strong> </label>
					<input name = "personality" size = "6" maxlength = "4"/>
					&lpar; 
					<a href = "https://www.humanmetrics.com/personality"
					target = "_blank">
						Don't know your type?</a>
					&rpar;
					 <br/>		 
					 
				<label class = "column"><strong>Favorite OS:</strong> </label>
					<select name = "system">
						<option selected = "selected">Windows</option>
						<option>Mac OS X</option>
						<option>Linux</option>
					</select>
					<br/>
				
				<label class = "column"><strong>Seeking age:</strong> </label>
					<input name = "ageMin" size = "6" maxlength = "2"
						placeholder = "min"/> to 
					<input name = "ageMax" size = "6" maxlength = "2"
						placeholder = "max"/>
					<br/>
				
				<input type = "submit" value = "Sign Up"/>
			</fieldset>
		</form>
			
<?php
	include "bottom.html";
	
?>