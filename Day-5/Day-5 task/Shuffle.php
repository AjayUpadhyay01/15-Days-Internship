<?php
$a[0] = "a";
$a[1] = "b";
$a[2] = 1;
$a[3] = 2;
$a[4] = 3;
shuffle($a);
echo "<pre> Shuffled Array is :-";
print_r($a);
?>
<button onClick="window.location.reload();">shuffle</button>