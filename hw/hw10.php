<?php

echo "Введіть максимальне число Фібоначчі" . PHP_EOL;
$number1 = (float)fgets(STDIN);

function fib($max) : Generator {
    $a = 0;
    $b = 1;
    while ($b <= $max) {
        yield $b;
        $c = $b;
        $b += $a;
        $a = $c;
    }
}

echo "Числа Фібоначчі до числа $number1" . PHP_EOL;
foreach (fib($number1) as $number) {
    echo $number . PHP_EOL;
}