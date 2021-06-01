<?php
$a = array("Cricket", "Video-game", "Football", "Tennis","Relly","Climbing");
shuffle($a); // Shuffle the array
foreach ($a as $key => $value) {
echo "<br /> $value ";
}