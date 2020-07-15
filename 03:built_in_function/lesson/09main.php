<?php

$n = 9.4925;

echo ceil($n) . PHP_EOL;
echo floor($n) . PHP_EOL;
echo round($n) . PHP_EOL;
echo round($n, 3) . PHP_EOL;

for ($i=1; $i < 20; $i++) {
  echo mt_rand(1, 6) . PHP_EOL;
}
