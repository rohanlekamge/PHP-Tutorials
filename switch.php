<!DOCTYPE html>
<html>
<head>
	<title>Switch Case</title>
</head>
<body>
	<?php 

		$user_group_code = "B";

		switch ($user_group_code) {
			case 'A':
			echo "User Group: Administrator <br>";
			break;
			
			case 'D':
			echo "User Group: Power User <br>";
			break;

			case 'B':
			echo "User Group: User<br>";
			break;

			case 'C':
			echo "User Group: Guest<br>";
			break;

			default:
			echo "Invalid Group";
			break;
		}

	 ?>
</body>
</html>