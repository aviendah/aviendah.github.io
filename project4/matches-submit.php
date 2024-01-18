<?php
/*
	Created by: Tatum Manning
	
	This page matches users to potential dates based on information
	provided. 
*/
	

	include "top.html";
	
?>
	<!-- Title with dynamic name. -->
		<p><b>Matches for <?=$_GET["name"]?></b></p>
<?php
	
		# Creates an array of each line in singles.txt file.
		$users = file("singles.txt");
		
		# Creates an array of types for each line in the file. 
		foreach($users as $line) {
			
			list($name, $gender, $age, $personality,
				$system, $ageMin, $ageMax) = explode(",", $line);
			
			# Once the user's name is found, their information is 
			# stored in variables for later use in matching.
			if ($name == $_GET["name"]) {
				$opposite = $gender;
				$my_age = $age;
				list($myA, $myB, $myC, $myD) = str_split($personality);
				$my_system = $system;
				$my_min = $ageMin;
				$my_max = $ageMax;
			}
			
		}
		
		# Creates an array of types for each line in the file. 
		foreach($users as $line) {
			
			list($name, $gender, $age, $personality,
				$system, $ageMin, $ageMax) = explode(",", $line);
				
		# Matches user to other entries in file based on if they are
		# equal or not. Moves on to the next if statement if there is 
		# a match.
			if ($gender != $opposite) {
				if ($age <= $my_max && $age >= $my_min) {
					if ($my_age <= $ageMax && $my_age >= $ageMin) {
						if ($system == $my_system) {
							if (strpos($personality, $myA, 0) ||
								strpos($personality, $myB, 1) ||
								strpos($personality, $myC, 2) ||
								strpos($personality, $myD, 3)) {
								
								?>	
								
								<!-- This section will print each match. -->
									<div class = "match">
										
										<p>
										<img src="user.jpg" alt="banner logo" />
										<?=$name?>
										</p>
										<ul>
											<li><b>gender: </b><?=$gender?></li>
											<li><b>age:</b> <?=$age?></li>
											<li><b>type:</b> <?=$personality?></li>
											<li><b>OS:</b> <?=$system?></li>
										</ul>
									</div>
									
								<?php
							}
						}
					}
					
				}
			}
		}		
	include "bottom.html";			
?>
