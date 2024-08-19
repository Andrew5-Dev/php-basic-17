<?php

function randArray(int $length = 10, int $min = 1, int $max = 10): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$myArray = randArray();
print_r($myArray);


function sum(array $Array): float
{
    $sum = 0;
    foreach ($Array as $elem)
        $sum += $elem;
    return $sum;
}

echo "2. Sum is = " . sum($myArray) . PHP_EOL;

$result = reset($myArray);
for ($i = 1, $a = count($myArray); $i < $a; ++$i) {
    $result *= $myArray[$i];
}

echo "3. Product is = " . $result . PHP_EOL;

$number = 5;
function countNum(int $num, array $arr): int {
    $count = 0;
    foreach($arr as $item){
        if($item==$num)
            $count++;
    }
    return $count;
}

echo "5 is found in your array = " . countNum($number,$myArray) . PHP_EOL;

foreach ($myArray as $number) {
    for($i=0; $i < $number; $i++) {
        if ($number % 3 === 0) {
            echo "divisible by 3 = " .  $number . PHP_EOL;
            break;
        }
    }
}
