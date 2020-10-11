<?php 
session_start();
 ?>
<html>
<head>
  <title>Storing</title>
  <link rel="stylesheet" type="text/css" href="login_validation_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
</head>
<?php
	//Setting up the SQL server
	$username = "root";
	$pass = "mysql";
	$database = "users";

	//connecting to the database
	$mysqli = new mysqli("localhost", $username, $pass, $database);

	//checking database
	if ($mysqli->connect_error) 
	{
	  die("Connection failed: " . $mysqli->connect_error);
	}
	else
	{
	//Collecting and Assigning the variables 
	
	
	$email=$mysqli->real_escape_string($_POST["email"]);
	$password=$mysqli->real_escape_string($_POST["password"]);

	// echo "$email $password";
	$query = "SELECT * FROM user_details
	          WHERE EMAIL='$email' AND PASSWORD='$password'";
	// $result=$mysqli->query($query);
	// echo mysqli_num_rows($result);

	// var_dump($result);
	echo "<h1 id='head'>Data From Our Database !</h1>";
	echo '<table id="table" border="2" cellspacing="7" cellpadding="7"> 
	      <tr id="final_head"> 
	          <td>ID</td> 
	          <td>Name</td> 
	          <td>Email</td> 
	          <td>Phone</td> 
	          <td>Address</td> 
	      </tr>';

	if ($result = $mysqli->query($query)) 
	{
	    while ($row = $result->fetch_assoc()) 
	    {
	        $id = $row["ID"];
	        $name = $row["NAME"];
	        $email = $row["EMAIL"];
	        $phone = $row["PHONE"];
	        $address = $row["ADDRESS"]; 

	        echo '<tr id="final_rows"> 
	                  <td>'.$id.'</td> 
	                  <td>'.$name.'</td> 
	                  <td>'.$email.'</td> 
	                  <td>'.$phone.'</td> 
	                  <td>'.$address.'</td> 
	              </tr>';
	    }
	    $result->free();
	}
	}
	echo 
	"
	<div id='box'>
		<button id='button1'><a href='logout.php'>Logout</a></buton>
		
	</box>
	";
?>