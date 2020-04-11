<!DOCTYPE html>
<html>
<head>
	<title> Logical Operators </title>
</head>
<body>
	<?php 

		$sub1 = 42;
		$sub2 = 49;

		echo "Subject 1: {$sub1} <br>";
		echo "Subject 2: {$sub2} <br>";

		if (($sub1 > 50) || ($sub2 > 50)) {
			echo "You have passed the exam";
		} else {
			echo "You need  to pass both subjects";
		}
	 ?>


	 <br>
	 <h2> Not Operator (!)</h2>
	 <?php 
	 	$username = "Rohan";
	 	if (isset($username)) {
	 		echo "Please enter the username";
	 	}
	  ?>
</body>
</html>