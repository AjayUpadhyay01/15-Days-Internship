<!DOCTYPE html>
<html>
<head>
	<title>Display Values</title>
</head>
<body>
	<form method="post">
		<h2> Select key : </h2>
		<?php
			$a = range('A','Z');
			echo "<select name='opt'>";
			foreach ($a as $value)
			{
				echo "<option value=".$value.">$value</option>";
			}
			echo "</select>";
		?>
		<input type="submit">
	</form>
</body>
</html> 

<?php
$arr = array(
	//'A' => "Ajay",
	'B' => "BALL",
	'C' => "CAT",
	//'D' => "DOG",
	'E' => 10,
	'F' => "FISH",
	//'G' => 20,
	'H' => "HAND",
	'I' => 30,
	//'J' => "JUG",
	'K' => "KITE",
	'L' => 40,
	//'M' => "MOON",
	'N' => 50,
	'O' => "ORANGE",
	//'P' => "PEACOCK",
	'Q' => 60,
	'R' => "RABBIT",
	//'S' => "SHIP",
	'T' => 70,
	'U' => "UMBRELLA",
	//'V' => 80,
	'W' => "WATCH",
	'X' => 90,
	//'Y' => "YAK",
	'Z' => 100 );

if($_POST)
{
	$ch = $_POST['opt'];
	if (array_key_exists($ch, $arr)) {
		echo "<b>$ch</b> For <b>$arr[$ch]</b>.";
	} else {
		echo "Array Index <b>$ch</b> Is Not Avaliable.";
	}
}
?>