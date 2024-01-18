<?php 
	session_start();
	
	include("top.html"); 
	

		# Creates an array of each line in users.txt file.
		$users = file("users.txt");
		$names = array();
		
		
			foreach ($users as $line) {
				
				list($name, $password, $house) = explode(",", $line);
				
				array_push($names, $name);
				
				
				if ($name == $_GET["name"] && 
					$password == $_GET["password"]) {
?>
						<h1><b>Welcome back, <?=$_GET["name"]?>!</b></h1><br/>
<?php
						$_SESSION['house'] = $house;
						$_SESSION['name'] = $name;
						$_SESSION['password'] = $password;
						
						
					
				} 
			}
			
			if (!in_array($_GET["name"], $names)) {
?>
						<p><b>Sorry, that username or password is incorrect. <br/>
						Please <a href="login.php">click here</a> to try again.</b></p>
<?php
			}
		
		
	include("bottom.html"); 
?>