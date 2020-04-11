<!DOCTYPE html>
<html>
<head>
	<title>Booleans</title>
</head>
<body>
	<?php 

		$var1 = true;
		$var2 = false;

	?>


	<?php echo "Variable 1: " . $var1;  ?> <br>
	<?php echo "Variable 2: " . $var2;  ?> <br><br>

	<?php echo "Is Variable 1 Boolean? " . is_bool($var1);  ?> <br>

</body>
</html>