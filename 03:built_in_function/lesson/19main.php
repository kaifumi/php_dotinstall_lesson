<?php

$scores = [
  'taguchi' => 80,
  'kaino' => 70,
  'itaya' => 60
];

// keyのみ出す
$keys = array_keys($scores);
print_r($keys);
// valueのみ出す
$values = array_values($scores);
print_r($values);

// 指定のkeyがあればtrue
if (array_key_exists('taguchi', $scores) === true ) {
  echo 'taguchiなら俺の隣で寝てるよ' . PHP_EOL;
}

// 指定のvalueがあればtrue
if (in_array(80, $scores) == true ) {
  echo '80なら値にあるよ' . PHP_EOL;
}

// 指定の値を持つkeyを返す
echo array_search(70, $scores) . PHP_EOL;
