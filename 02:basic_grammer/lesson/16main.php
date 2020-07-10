<?php

$signal = 'red';

switch ($signal) {
  case 'red' :
    echo 'Stop' . PHP_EOL;
    break;
  case 'yellow' :
    echo 'Caution' . PHP_EOL;
    break;
  case 'blue' :
    echo 'Go' . PHP_EOL;
    break;
}
