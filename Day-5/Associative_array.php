<?php
// associative array
//key = value
//method 1 

$a[0]=1;
$a['c']="hello";
$a['p']="php";
$a['a']=100;
$a[1]=10.10;

//method 2
//alwayz use this method to create an array

$a = array(
	0 => 10,
	'c' => "hello",
	'p' => "php",
	'a' => 100,
	1 => 10.10,
);

//print value


echo "c for ".$a['c'];

foreach ($a as $value) {
	echo "value is <b>$value</b> <br/>";
}

foreach ($a as $key => $value) {
	echo "key is <b> $key </b> value is <b>$value</b> <br/>";
}

//3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>