<?php
function prime($n){
    $x=2;
    while($x<$n){
        if($n%$x==0){
            return "it is a prime number .";
        }
        $x++;
    }
    return "it is not a price number .";
}
echo prime(3)
?>