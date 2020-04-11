<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays</title>
</head>
<body>
	<?php $student = $arrayName = array('firstName' => 'Rohan', 'lastName' => 'Lekamge', 'age' => 22); ?>

	<pre><?php echo print_r($student); ?></pre>
	
	<?php echo $student["firstName"]; ?><br>
	<?php echo $student["firstName"] . " " . $student["lastName"]; ?><br>
	
</body>
</html>