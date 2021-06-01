<?php
$a = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green",
"Orange" => "orange");
ksort($a);
foreach ($a as $key => $value) {
echo "<br />$key - $value ";
}
?>