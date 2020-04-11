<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?php 

		$myCars = array("Toyota","Nissan","Yamaha","Mitsubishi");

		echo $myCars[3];

	 ?>
	 <br><br>
	 <h3>Before</h3>
	 <pre><?php print_r($myCars) ?></pre><br><br>
	 
	 <?php $myCars[4] = "Suzuki"; ?>

	 <h3>After</h3>
	 <pre><?php print_r($myCars) ?></pre>

	 <?php $myCars[] = "Bajaj"; ?>

	 <h3>After After</h3>
	 <pre><?php print_r($myCars) ?></pre>

	 <?php $myCars[3] = "Honda"; ?>

	 <h3>After After</h3>
	 <pre><?php print_r($myCars) ?></pre>
</body>
</html>