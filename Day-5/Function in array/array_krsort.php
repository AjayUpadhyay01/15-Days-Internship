<?php
$a = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green",
"Orange" => "orange");
krsort($arr);
foreach ($a as $key => $value) {
echo "<br />$key - $value ";
}

?>