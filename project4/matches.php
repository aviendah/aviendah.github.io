<?php
/*
	Created by: Tatum Manning
	
	This form allows users to enter their name and find matches 
	from the text file of all singles.
*/
	include "top.html";
	
?>
	<!-- This form allows users to input name and search for matches.-->
		<form action = "matches-submit.php"
			method = "get" enctype = "multipart/form-data">
			<fieldset>
			
				<legend>Returning User:</legend>
				
				<label class = "heading">Name: </label>
					<input name = "name" size = "16"/><br/>
				
				<input type = "submit" value = "View My Matches">
				
			</fieldset>
		</form>

<?php
	include "bottom.html";
	
?>