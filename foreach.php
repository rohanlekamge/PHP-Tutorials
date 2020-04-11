<!DOCTYPE html>
<html>
<head>
	<title>For Each</title>
</head>
<body>
	<?php 

		$myCars = array("Toyota","Nissan","Yamaha","Mitsubishi");

		foreach ($myCars as $value) {
			echo $value . "</br>";
		}

	?>
<br><br>
	<?php 

	$student = array('firstName' => 'Rohan', 'lastName' => 'Lekamge', 'age' => 22, 'Grade' => 13); 

	foreach ($student as $key => $value) {
		echo $key . " : " . $value . "</br>";
	}

	?>

</body>
</html>