<?php

echo "Enter Number (if)" . PHP_EOL;
$number1 = (int)fgets(STDIN);

if ($number1 == 1) {
    echo "green" . PHP_EOL;
} elseif ($number1 == 2) {
    echo "red" . PHP_EOL;
} elseif ($number1 == 3) {
    echo "blue" . PHP_EOL;
} elseif ($number1 == 4) {
    echo "brown" . PHP_EOL;
} elseif ($number1 == 5) {
    echo "violet" . PHP_EOL;
} elseif ($number1 == 6) {
    echo "black" . PHP_EOL;
} else {
    echo "white" . PHP_EOL;
}

echo "Enter Number (switch)" . PHP_EOL;
$number2 = (int)fgets(STDIN);

switch ($number2)  {
    case 1: echo "green" . PHP_EOL; break;
    case 2: echo "red" . PHP_EOL; break;
    case 3: echo "blue" . PHP_EOL; break;
    case 4: echo "brown" . PHP_EOL; break;
    case 5: echo "violet" . PHP_EOL; break;
    case 6: echo "black" . PHP_EOL; break;
    default: echo "white" . PHP_EOL;
}


echo "Enter Number (match)" . PHP_EOL;
$number3 = (int)fgets(STDIN);

$result = match ($number3) {
    1 => "green" . PHP_EOL,
    2 => "red" . PHP_EOL,
    3 => "blue" . PHP_EOL,
    4 => "brown" . PHP_EOL,
    5 => "violet" . PHP_EOL,
    6 => "black" . PHP_EOL,
    default => "white" . PHP_EOL,
};

echo $result;