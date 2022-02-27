<?php
// function armstrong_number($num) {
//   $sl = strlen($num);
//   $sum = 0;
//   $num = (string)$num;
//   for ($i = 0; $i < $sl; $i++) {
//     $sum = $sum + pow((string)$num{$i},$sl);
//   }
//   if ((string)$sum == (string)$num) {
//     return "True";
//   } else {
//     return "False";
//   }
// }
// echo "Is 153 Armstrong number? ".armstrong_number(153);
// echo "\nIs 21 Armstrong number? ".armstrong_number(21);
// echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";

// another solution

// $num = 153;
// $copyNum = $num;
// $digit = 0 ;
// $remainder = 0;
// $total = 0;
// while ($copyNum !=0){
//   $digit++;
//   $copyNum = floor($copyNum/10);
// }
// $copyNum = $num;
// while ($copyNum != 0){
//   $remainder = $copyNum % 10;
//   $total+= pow ($remainder, $digits);
//   $copyNum = floor($copyNum/10);
// }
// if ($num == $total){ echo " $num is an Armstrong Number";} 
// else { echo "$num is not an Armstrong number"; }
function armstrong_number($num) {
  $rem=0;
  $total=0;
  $x=$num;
  while($x !=0){
    $rem =$x % 10;
    $total = $total + $rem * $rem * $rem;
    $x=$x / 10;
  }
    if ($total == $x) {
      echo "True \n";
    } else {
      echo "False\n";
    }
  }
  armstrong_number (10)
?>