<?php

declare(strict_types=1);

function showInfo(string $name, int $score): void
{
  echo $name . ':' . $score . PHP_EOL;
}

showInfo('kaino', 10);
// showInfo('kaino', 'aaaa');
// showInfo('kaino', '10'); // 強い型付けでないと変換できてしまう
