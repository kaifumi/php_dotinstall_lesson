<?php

function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)];
}

// print_r(getStats(1, 2, 3, 4));
// list($sum, $average) = getStats(1, 2, 3, 4);
[$sum, $average] = getStats(1, 2, 3, 4);

echo $sum . ' : ' . $average . PHP_EOL;