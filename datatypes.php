<?php

function sum(int $x , int $y)
{
    var_dump($x,$y);
    echo'<br />';
    return $x + $y ;
}

$sum = sum(2.5 , 3);

var_dump(sum);