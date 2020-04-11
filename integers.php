<!DOCTYPE html>
<html>
<head>
	<title>Integers</title>
</head>
<body>
	<?php

		$var1 = 30;
		$var2 = 40;

	?>

	Basic Calculation (((10 + 20 + $var1) * $var2) / 20 - 50): <?php echo (((10 + 20 + $var1) * $var2) / 20 - 50) ?>

	<h2> Some Usefull Integer Functions </h2>

	Square Root: <?php echo sqrt(100); ?><br>
	Exponential: <?php echo pow(2, 4); ?><br>
	Absolute Value: <?php echo abs(10-15); ?><br>
	Modulus: <?php echo fmod(10, 3); ?><br>
	Random Number: <?php echo rand() ?><br>
	Random Number: <?php echo rand(10,100); ?><br>

	<h2> Incremet Decrement </h2>

	

	Addition: <?php $var1 += 20; echo $var1 ?><br>
	Subtraction: <?php $var1 -= 20; echo $var1 ?><br>
	Division: <?php $var1 /= 3; echo $var1 ?><br>
</body>
</body>
</html>