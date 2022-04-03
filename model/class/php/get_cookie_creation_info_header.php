<?php 
session_start();

$type_search_variable_initial =$_POST["type_search_variable_initial"] ;
$value =$_POST["value"] ;
//$_SESSION['value'] = $value;

$_SESSION['type_search_variable_initial'] = $type_search_variable_initial;
$_SESSION['value'] = $value;


echo $type_search_variable_initial; 
echo $value; 
//echo $values; 
?>





