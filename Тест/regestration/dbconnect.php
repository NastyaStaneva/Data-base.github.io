<?php
	//$db = mysqli_connect('localhost');
	//$sel_db = mysqli_select_db(link $db, database_name 'registration');
    //$db = regestr_connect ("localhost");
    //regestr_select_db ("registration",$db);
?> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT id, last_name, firs_name,  FROM users";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firs_name"]. " " . $row["last_name"]. "<br>";
  }
} 
else {
echo "0 results";
}
//$conn->close();*/
?>

<?php

	/*require ('libs/rb.php'); //библиотека для соединения через readbeanphp
	 R::setup( 'mysql:host=localhost;dbname=registration', 'root', '' );*/
?>
