<?php 
session_start();

$type_search_variable_initial =$_POST["type_search_variable_initial"] ;
$value =$_POST["value"] ;
//$_SESSION['value'] = $value;

echo $type_search_variable_initial; 
echo $value; 
//echo $values; 
?>



<?php

$dbname="u481158665_ffa";
$username="u481158665_ffa";
$password="v3p9r3e@59A";
$servername="localhost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `info_all` WHERE `get_users_nom_complet`="DOVY Lueyi"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>" . $row["get_users_nom_complet"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>


