<?php
$num = 9;
$factorial = 1;
for ($x=$num; $x>=1; $x--)
{
 $factorial = $factorial * $x;
}
echo "<h2> Factorial of $num is $factorial </h2>";
?>