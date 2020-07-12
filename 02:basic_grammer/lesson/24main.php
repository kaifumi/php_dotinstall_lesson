<?php

$rate = 1.1;

function sum($a, $b, $c, $rate)
{
  // global $rate;
  return ($a + $b + $c) * $rate;
}

echo sum(100, 300, 500, $rate) + sum(300, 400, 500, $rate) . PHP_EOL;