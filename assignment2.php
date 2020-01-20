<?php

$x=5;
$y=20;
switch($x){
    case 25:
        echo "sum is".($x+$y);
    break;
    case 100:
        echo "mutiplication is".($x*$y);
    break;
    case 15:
        echo "difference is".($y-$x);
    break;
    default:
        echo "the sum is an integer";
}

?>
