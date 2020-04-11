<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?php 

		$myCars = array(10,20,30,"Toyota","Nissan","Yamaha","Mitsubishi",array("black","white","yellow"));

		echo $myCars[3];

	 ?>
	 <br><br>
	 <h3>Before</h3>
	 <pre><?php print_r($myCars) ?></pre><br><br>
	 
	 <?php echo $myCars[7][1]; ?>

	 
</body>
</html>