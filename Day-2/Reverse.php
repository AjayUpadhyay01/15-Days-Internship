<?php
$num = 56342;
echo "<h2>Given number is = $num </h2>";
$reversenum = 0;
while ($num > 1)
{
$temp = $num % 10;
$reversenum = ($reversenum * 10) + $temp;
$num = ($num / 10);
}
echo "<h2>Reverse number is = $reversenum </h2>";
?>