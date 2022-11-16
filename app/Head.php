<?php declare(strict_types=1);


function add(...$numbers)
{
    $sum=0;
    foreach ($numbers as $i){
        $sum+=$i;
    }
    return $sum;
}
function concate(...$strings)
{
    $add = "";
    foreach ($strings as $i){
        $add .=$i;
    }
    return $add;
}