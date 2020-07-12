<?php

function showAd($message = 'Ad')
{
  echo '--------' . PHP_EOL;
  echo '--' . $message . '--' . PHP_EOL;
  echo '--------' . PHP_EOL;
}

showAd('Header-Ad');
echo 'aaaaaaa' . PHP_EOL;
echo 'iiiiiii' . PHP_EOL;
showAd('Ad');
showAd();
echo 'uuuuuuu' . PHP_EOL;
echo 'eeeeeee' . PHP_EOL;
showAd('Footer-Ad');