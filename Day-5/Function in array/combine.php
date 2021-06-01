<?php
$array1 = array("Banana" , "Apple" , "Mango","Orange");
$array2 = array("Yellow","Red", "Green","Blue");
$newVar = array_combine($array1, $array2);
print_r($newVar);
?>