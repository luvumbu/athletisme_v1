<?php 
/*
// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = '<div onclick="general_search(this)" title="'.$name.'" class="general_search_class">'.$name.'</div>';
      } else {
        $hint .= '<div onclick="general_search(this)" title="'.$name.'" class="general_search_class">'.$name.'</div>';
      }
    }
  }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
*/


// lookup all hints from array if $q is different from ""
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = "<div onclick='my_name_is_result(this)' title='".$name."' class='my_name_is'>".$name."</div>";
      } else {
        $hint .= "<div onclick='my_name_is_result(this)' title='".$name."' class='my_name_is'> $name </div>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>