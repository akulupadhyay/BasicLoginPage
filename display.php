<html>
<head>
  <title>Display</title>
  <link rel="stylesheet" type="text/css" href="display_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  
</head>
<body>
<?php 
$username = "root"; 
$password = "mysql"; 
$database = "users"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT ID,NAME,EMAIL FROM user_details";
$result = $mysqli->query($query);
echo "<h1 id='head'>Data From Our Database !</h1>";
echo '<table id="table" border="2" cellspacing="7" cellpadding="7"> 
      <tr id="final_head"> 
          <td>ID</td> 
          <td>Name</td> 
          <td>Email</td>  
      </tr>';

if ($result = $mysqli->query($query)) 
{
    while ($row = $result->fetch_assoc()) 
    {
        $id = $row["ID"];
        $name = $row["NAME"];
        $email = $row["EMAIL"];

        echo '<tr id="final_rows"> 
                  <td>'.$id.'</td> 
                  <td>'.$name.'</td> 
                  <td>'.$email.'</td> 
              </tr>';
    }
    $result->free();
}
echo "
  <div id='box' style='text-align: center; margin-top: 20%;'>
    <button id='button1' style='color: black;font-family: \"Ubuntu\"; display:inline;
  padding: 15;
  margin:5%;
  border-collapse: collapse;
  border: solid black 2px;
  width: auto;
  font-size: 20;'><a href='logout.php' style='  color: black;
  text-decoration: none;'>Login Now </a></buton>
    
  </box>
  ";
?>
</body>
</html>