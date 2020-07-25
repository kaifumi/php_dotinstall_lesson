<?php

$a = [3, 4, 8];
$b = [4, 8, 12];

// 連結
$merged = array_merge($a, $b);
// $merged = [...$a, ...$b];  // 古いバージョンでは実行できないみたい
print_r($merged);

// 各値一意化
$uniques = array_unique($merged);
print_r($uniques);

// 配列差分
$diff1 = array_diff($a, $b);
print_r($diff1);  // [3]
$diff2 = array_diff($b, $a);
print_r($diff2);  // [12]

// 共通要素
$common = array_intersect($a, $b);
print_r($common);  // [4, 8]
