<?php

// $name = 'taguchi';
// $name = 'kaino';

// 定数
define('NAME', 'taguchi');
// 再代入はできない
define('NAME', 'dotinstall');

echo NAME . PHP_EOL;

// 定数の付け方2個目
const NAME_SECOND = 'taguchi';
const NAME_SECOND = 'dotinstall';

echo NAME_SECOND . PHP_EOL;