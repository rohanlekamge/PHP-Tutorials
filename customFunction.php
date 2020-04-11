<!DOCTYPE html>
<html>
<head>
	<title>Custom Function</title>
</head>
<body>
	<?php 

		function get_month_name ($monthVal = 0, $yearVal = 2014) {

			switch ($monthVal) {
				case 1: $month_name = "Duruthu"; break;
				case 2: $month_name = "Nawam"; break;
				case 3: $month_name = "Madin"; break;
				case 4: $month_name = "Bak"; break;
				case 5: $month_name = "Wesak"; break;
				case 6: $month_name = "Poson"; break;
				case 7: $month_name = "Esala"; break;
				case 8: $month_name = "Nikini"; break;
				case 9: $month_name = "Wap"; break;				
				default: $month_name = "Invalid Code"; break;
			}
			return $month_name . " " . $yearVal;
		}

		echo get_month_name(8, 2014);
		echo "<br>";
		echo get_month_name(1, 2016);

	 ?>

	 <br><br><br>

	 <?php 

	 	$domainName = "SL.lk";
	 	echo "Outside Function: {$domainName} <br>";
	 	myFunc();

	 	function myFunc() {
	 		global $domainName;
	 		echo "Inside Function: {$domainName} <br>";
	 	}

	  ?>
</body>
</html>