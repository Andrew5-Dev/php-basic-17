<?php

echo "Enter Radius " . PHP_EOL;
$radius = (float)fgets(STDIN);
function area (float $radius): float
{
    return  pi() * pow($radius, 2);
}

$result = area($radius);
echo "Area of Circle is $result" . PHP_EOL;



echo "Enter number 1 " . PHP_EOL;
$number1 = (float)fgets(STDIN);
echo "Enter number 2" . PHP_EOL;
$number2 = (float)fgets(STDIN);

function exponentiation (float $number1, float $number2): float
{
    return  $number1 ** $number2;
}

$exponentNumber = exponentiation($number1, $number2);
echo "Exponentiation is $exponentNumber" . PHP_EOL;


function exponentiation2 (float &$exponentNumber): void
{
    $exponentNumber =  $exponentNumber ** 2;
}

echo "Enter number 3" . PHP_EOL;
$number3 = (float)fgets(STDIN);

exponentiation2($number3);
echo "Exponentiation is $number3" . PHP_EOL;
