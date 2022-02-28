<?php
function replace($word){
        $newWord = str_replace ("Python", "PHP", $word);
        echo $newWord;
}
replace("hello Python");

// 4!= 1*2*3*4 = 24
// function factorial($num){
//         $product = 1;
//         for($i=4; $i>=1; $i--){
//                 // echo $i ."\n";
//                 $product = $product* $i;
//         }
//         echo $product;

// }
// factorial(4);
?>