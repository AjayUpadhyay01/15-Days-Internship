<?php
$a = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green",
"Orange" => "Blue");
$uppercase = array_change_key_case($a,CASE_UPPER);
print_r($uppercase);
?>