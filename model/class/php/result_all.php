<?php 
session_start();

$type_search_variable_initial = $_SESSION['type_search_variable_initial']; 
$value = $_SESSION['value']  ;
include("connexion.php") ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `info_all` WHERE `get_users_nom_complet`="'.$value.'"';
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


