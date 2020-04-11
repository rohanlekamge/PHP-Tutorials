<!DOCTYPE html>
<html>
<head>
	<title>Floating Points</title>
</head>
<body>
<?php 

	$float = 6.28;

	echo $float . "<br>";

 ?>

 Round: <?php echo round($float,1); ?><br>
 Round Up: <?php echo ceil($float); ?><br>
 Round Down: <?php echo floor($float); ?><br>
 Round Down: <?php echo floor($float); ?><br>

 Check Integer or Floating Point <br><br>

 <?php 

 	$myFloat = 7.34;
 	$myInteger = 4;

  ?>

  <?php echo "Is {$myFloat} an Integer: " . is_int($myFloat); ?><br>
  <?php echo "Is {$myInteger} an Integer: " . is_int($myInteger); ?><br><br>

  <?php echo "Is {$myFloat} an Float: " . is_float($myFloat); ?><br>
  <?php echo "Is {$myInteger} an Float: " . is_float($myInteger); ?><br><br>

  <?php echo "Is {$myFloat} a Number: " . is_numeric($myFloat); ?><br>
  <?php echo "Is {$myInteger} a Number: " . is_numeric($myInteger); ?><br>
</body>
</html>