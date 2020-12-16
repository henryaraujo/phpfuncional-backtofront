<?php

$rate = 4.5;
$pay = function ($money) use ($rate) {
	return $money * $rate;
};
echo " (closure) -> ";
print_r($pay(1000));
