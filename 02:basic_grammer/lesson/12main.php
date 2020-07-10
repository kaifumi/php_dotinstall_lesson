<?php

$a = 'hello'; // string
$b = 10;  // int
$c = -1.3; // float
$d = null; // null
$e = true; // bool

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = (float)10;
$b = (string)1.3;
$c = (bool)'おはよう';

var_dump($a);
var_dump($b);
var_dump($c);