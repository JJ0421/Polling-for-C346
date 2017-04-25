<?php
	include ("connect.php");
	echo "The purpose of this application is to provide testing of database checking, insertion, and retrieval for C346 website project. <br>";
	echo "<br>";
	echo "Functionalities to be tested include:";
	echo "<br> - Creating user accounts";
	echo "<br> - Creating new polls";
	echo "<br><br><br>";
	
	echo "--------------------------------------------------Testing Account Creation---------------------------------------------------<br>";

	
	echo "Creating 10 new user accounts with the password \"password\"...";
	echo "<br><br>";
	$password = "password";
	$email = "\"\" ";
	for($i = 0; $i < 10; $i++){
			$username = "user" . $i;
			$sql1 = "SELECT * FROM users WHERE username='$username'";
			$result = mysqli_query($conn, $sql1);
			$rowcount = mysqli_num_rows($result);
			if ($rowcount >0) {	// if username is taken
    				echo "Error: Username " . $username . " already taken. <br>";
			} else {
    		
            		$sql = "INSERT INTO users (username,pass,email) VALUES ('$username','$password','$email')";
               
            		mysqli_select_db($conn, $dbname);
            			if (mysqli_query($conn, $sql)) {
    					echo "New account created successfully. <br>";
						echo "username = " . $username . " password = " . $password . " email = " . $email;
						echo "<br><br>";
						}
			}						
	}
	echo "<br><br>";
	echo "Creating 3 new user accounts with existing usernames... <br><br>";
		for($i = 0; $i < 3; $i++){
			$username = "user" . $i;
			$sql1 = "SELECT * FROM users WHERE username='$username'";
			$result = mysqli_query($conn, $sql1);
			$rowcount = mysqli_num_rows($result);
			if ($rowcount >0) {	// if username is taken
    				echo "Error: Username " . $username . " already taken. <br>";
			} else {
    		
            		$sql = "INSERT INTO users (username,pass,email) VALUES ('$username','$password','$email')";
               
            		mysqli_select_db($conn, $dbname);
            			if (mysqli_query($conn, $sql)) {
    					echo "New account created successfully. <br>";
						echo "username = " . $username . ", password = " . $password . ", email = " . $email;
						echo "<br><br>";
						}
			}						
	}
	
		echo "-----------------------------------------------------------------------------------------------------------------------------<br>";
		echo "<br>";
		
	
	
	
	
	
	
	
	

?>