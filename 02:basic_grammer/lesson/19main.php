<?php

$hp = -100;

// while ($hp > 0) {
//   echo "残りHPは$hp" . 'です' . PHP_EOL;
//   $hp -= 10;
// }


do {
  echo "残りHPは$hp" . 'です' . PHP_EOL;
  $hp -= 10;
} while ($hp > 0);