<?php

$lunches = [
  'ひるめし',
  'ラーメン武蔵',
  'うまかった',
];

$scores = [
  90,
  40,
  100,
  ...$lunches,
  'うぇい',
  '920円',
];

echo $scores . PHP_EOL;
var_dump($scores);
print_r($scores);
echo $scores[3][1] . PHP_EOL;