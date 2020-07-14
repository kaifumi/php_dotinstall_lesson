<?php

$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;

$info = sprintf("[%-25s][%010.1f]", $name, $score);
echo $info . PHP_EOL;

printf("[%-25s][%010.1f]", $name, $score);