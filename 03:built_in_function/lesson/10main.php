<?php

$scores = [30, 40, 50];

// array_unshift($scores, 10, 20);
// array_push($scores, 60, 70);
// $scores[] = 80;
array_shift($scores);
array_pop($scores);

print_r($scores);