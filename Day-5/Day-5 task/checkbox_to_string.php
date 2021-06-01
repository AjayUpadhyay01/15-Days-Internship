<?php 
	$a = array("Ajay", "plays", "Cricket", "every", " day", 
		   "Mihir", "drinks", "tea", "after", "lunch",
		   "Raj", "is", "walking", "on", "the road",
		   "we", "will go", "for", "shopping", "tomorrow",
		   "Pranjal", "is", "eating", "mango", 
		   "they", "were", "running","that time"); 
?>
<form method="post">
Words :
<?php
	foreach ($a as $value)
		{
			echo "$value<input type='checkbox' name='cbox[]'' value='$value'>&nbsp;&nbsp;&nbsp;";
		}
?>
<input type="submit">
</form>
<?php
if($_POST)
{
$check = $_POST['cbox'];
$string = implode(" ", $check);
echo $string;
}
?>