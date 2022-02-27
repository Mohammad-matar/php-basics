<?php
$a = 32;
$b = 45;
echo"Before swapping: ".$a. ', ' .$b."\n";
list ($a, $b) = array($b, $a);
echo " \n After swapping: ".$a. ', '.$b. "\n";
?>