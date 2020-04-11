<?php

$firstName = "Rohan";
$lastName = "Lekamge";
$age = 78;

echo "Full Name: " . $firstName . " " . $lastName; //Full Name: Rohan Lekamge
echo "<br>";
echo "Full Name: {$firstName} {$lastName}"; //Full Name: Rohan Lekamge
echo "<br>";
echo 'Full Name: {$firstName} {$lastName}'; //Full Name: {$firstName} {$lastName}
echo "<br>";
echo 'Full Name: $firstName $lastName'; //Full Name: $firstName $lastName
echo "<br>";
echo $age;

?>