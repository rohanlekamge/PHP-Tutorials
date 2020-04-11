<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
	<?php 

		$myNumbers = array(13,16,46,76,52,46);

	 ?>


	 Maximum Value: <?php echo max($myNumbers); ?> <br>
	 Minimum Value: <?php echo min($myNumbers); ?> <br>
	 Count : <?php echo count($myNumbers); ?> <br>
	 <br>

	 Sort : <pre><?php sort($myNumbers); print_r($myNumbers); ?></pre> <br>
	 Reverse Sort : <pre><?php rsort($myNumbers); print_r($myNumbers); ?></pre> <br>
	 <br>

	 Implode : 
	 <?php 
	 	$string = implode(" | ", $myNumbers); 
	 	echo $string;
	 ?>
	 <br>

	 Explode : 
	 <pre>
	 <?php 
	 	$newarray = explode(" | ", $string); 
	 	print_r($newarray)
	 ?>
	 </pre>

	 Search : <?php echo in_array(46, $myNumbers) ?> <br>
	 Search : <?php echo in_array(10, $myNumbers) ?> <br>
</body>
</html>