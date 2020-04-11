<!DOCTYPE html>
<html>
<head>
	<title>If Statement</title>
</head>
<body>
	<?php 
		$avgScore = 75;
		echo "Score: {$avgScore}";
		echo "</br>";

		if ($avgScore >= 70) {
			echo "You're qualified. Grade A";
		} elseif ($avgScore >= 40) {
			echo "You're qualified. Grade B";
		} else {
			echo "Please try again";
		}
	 ?>
</body>
</html>