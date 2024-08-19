<?php

echo "Enter number 1 " . PHP_EOL;
$number1 = (float)fgets(STDIN);
echo "Enter number 2" . PHP_EOL;
$number2 = (float)fgets(STDIN);


function multiplication (float $number1, float $number2, ?Closure $closure = null): float
{
    $number1 = $number1 * $number2;
    if ($closure !== null) {
        $closure($number1);
    }
        return $number1;
}

$closure = function (float $number1)
{
    echo "Closure is $number1" . PHP_EOL;
};

$sum = multiplication($number1, $number2, $closure);


