<?php
//numerical array
//method1
$a[0]=50;
$a[1]=70;
$a[2]=12.50;
$a[3]="aa";
$a[4]="20";

//method 2 dynamic index
$a[]=50;
$a[]=70;
$a[]=12.50;
$a[]="aa";
$a[]="20";

//method3
//always use this method to create an array

$a = array("a","b","c",1,2,10.80);

//Print array values

echo $a[3];


//print whole array

for ($i=0; $i < count($a) ; $i++) { 
	echo $a[$i]." <br/>";
}

$sum = array_sum($a);
echo "$sum  <br/>";

//3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);



?>