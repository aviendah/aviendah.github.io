<?php 
session_start();

include("top.html"); 

$_SESSION["name"] = $_POST['name'];
$_SESSION["password"] = $_POST['password'];
$_SESSION["house"] = $_POST['house'];
?>

		<div class = "welcome">
			<p><b>Thank you!</b></p>
<?php
			#Prints a personalized Welcome message for the user. 
			print "Welcome to The Owlery, " .$_POST["name"];
			print "!";

?>			
			
		</div>

<?php

	# Creates an array of all the information entered.
	$entry = array();
	foreach ($_POST as $param) {
		array_push($entry, $param);
		
	}
	
	# Turns the array of input into a string array
	$string_entry = PHP_EOL . implode(",", $entry);
	
	
	# Writes the string array of input to the file "users.txt"
	file_put_contents("users.txt", $string_entry, FILE_APPEND);

	include "bottom.html";
?>
