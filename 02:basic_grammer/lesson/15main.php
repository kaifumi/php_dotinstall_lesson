<?php

$score = 60;
$name = 'taguchi';

// if ($score >= 50 ){
//   if ($name === 'taguchi') {
//     echo 'taguchiこのやろ' . PHP_EOL;
//   }
// }

// 論理演算子で書くとより短く書けて見やすい
if ($score >= 50 && $name === 'taguchi') {
  echo 'taguchiこのやろ' . PHP_EOL;
}