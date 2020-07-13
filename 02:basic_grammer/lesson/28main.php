<?php

declare(strict_types = 1);

function getAward(?int $score): ?string
{
  return $score >= 100 ? 'Nice!' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;
echo getAward(null) . PHP_EOL;