<?php

$input = ' nonoにちyesyes  ';
$input = trim($input);

echo mb_strlen($input) . PHP_EOL;
echo mb_strpos($input, 'にち') . PHP_EOL;

$input = str_replace('にち', 'ばん', $input);
echo $input . PHP_EOL;
