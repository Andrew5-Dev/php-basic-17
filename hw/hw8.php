<?php


$number = 0;

while ($number < 10) {
    $number++;
    echo $number . PHP_EOL;
}

function fact(int $a): int
{
    $b = $a;
    while (--$a) $b *= $a;
    return $b;
}

echo 'Fact of 5 = ' . fact(5) . PHP_EOL;

$number = 0;

while ($number < 20) {
    $number++;
    if ($number % 2 == 0) {
        echo 'Even numbers = ' . $number . PHP_EOL;
    }
}

