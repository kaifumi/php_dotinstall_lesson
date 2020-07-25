<?php

$prices = [100, 200, 300];

$newPrices = array_map(
  // function ($n) { return $n * 1.1; },
  fn($n) => $n * 1.1, // アロー関数に書き換えれる。（古いバージョンだと対応してない）
  $prices  // ここに配列が来る意味はわからなかったが、array_map(関数, 配列)のそういう性質
);

print_r($newPrices);

