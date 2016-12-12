<?php

$calc = function($f,$x,$y){
 return $f($x,$y);
};
$sum = function($x,$y){
 return $x + $y;
};
$mult = function($x,$y){
 return $x * $y;
};
echo " calc(sum,2,3) -> ";
print_r($calc($sum,2,3));
echo "\n calc(mult,2,3) -> ";
print_r($calc($mult,2,3));