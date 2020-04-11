<?php

$first = "hello world. ";
$second = "How are you";

$sentence = $first;
$sentence .= $second;

echo $sentence; 
?>

<br>
All Simple: <?php echo strtolower($sentence)?>
<br>
All Upper: <?php echo strtoupper($sentence)?>
<br>
First Letter Capital: <?php echo ucfirst($sentence)?>
<br>
First Letter Capital of Each Sentence: <?php echo ucwords($sentence)?>
<br>
Number of Letters: <?php echo strlen($sentence)?>
<br>
Search for a String or Character: <?php echo strstr($sentence, "world")?>
<br>
Replace String or Character: <?php echo str_replace("you", "love", $sentence)?>