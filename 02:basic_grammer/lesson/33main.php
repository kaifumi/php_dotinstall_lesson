<?php

function sum(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo sum(1, 2, 3) . PHP_EOL;    // 6
echo sum(4, 5, 6, 7) . PHP_EOL; // 22