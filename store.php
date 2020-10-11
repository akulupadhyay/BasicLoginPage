<html>
<head>
  <title>Storing</title>
  <link rel="stylesheet" type="text/css" href="storing_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
</head>
<?php
	//Setting up the SQL server
	$username = "root";
	$password = "mysql";
	$database = "users";

	$mysqli = new mysqli("localhost", $username, $password, $database);

	//checking database
	if ($mysqli->connect_error) 
	{
	  die("Connection failed: " . $mysqli->connect_error);
	}
	else
	{
	//Collecting and Assigning the variables 
	
	$name=$mysqli->real_escape_string($_POST["name"]);
	$email=$mysqli->real_escape_string($_POST["email"]);
	$password=$mysqli->real_escape_string($_POST["password"]);
	$phone=$mysqli->real_escape_string($_POST["phone"]);
	$address=$mysqli->real_escape_string($_POST["address"]);

	$query = "INSERT INTO user_details(NAME,EMAIL,PASSWORD,PHONE,ADDRESS)
	          VALUES ('{$name}','{$email}','{$password}','{$phone}','{$address}')";
	$mysqli->query($query);
	$mysqli->close();
	}
	echo "<h1 class='head'>Thank you for Signing up !</h1>";
	echo "<h1 class='head'>Your information is being safely stored</h1>";
	echo "<h1 class='head'>Re-directing in 5 seconds...</h1><br>";
	echo 
	"
	<div id='box'>
		<button id='button1'><a href='register.php'>Register<br> Another<br> User</a></buton>
		<button id='button2'><a href='display.php'> View<br> Existing<br> Users </a></buton>
	</box>
	";

	// echo "<a href='index.php'>click here if you are not automatically re-directed !</a>";
 ?>
</html>