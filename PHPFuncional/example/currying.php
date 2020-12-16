<?php

$pay = function ($money) {
  return function ($rate) use ($money) {
    return $money * $rate;
  };
};
echo " (currying) -> ";
print_r($pay(1000)(4.5));
