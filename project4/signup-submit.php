<?php
/*
	Created by: Tatum Manning
	
	This is the submission page that appears once a user has
	signed up for the dating site. 
*/

	include "top.html";
	
?>

		<div class = "welcome">
			<p><b>Thank you!</b></p>
<?php
			#Prints a personalized Welcome message for the user. 
			print "Welcome to NerdLuv, " .$_POST["id"];
			print "!";

?>			
			<!-- Provides a link to matches page-->
			<p>Now
				<a href = "matches.php">log in to see your matches!</a>
			</p>
			
		</div>

<?php

	# Creates an array of all the information entered.
	$entry = array();
	foreach ($_POST as $param) {
		array_push($entry, $param);
		
	}
	
	# Turns the array of input into a string array
	$string_entry = PHP_EOL . implode(",", $entry);
	
	
	# Writes the string array of input to the file "singles.txt"
	file_put_contents("singles.txt", $string_entry, FILE_APPEND);

	include "bottom.html";
?>