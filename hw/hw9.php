<?php

$array = [];

for ($i = 0; $i < 10; $i++)  {
    $array[] = rand(1, 20);
}
print_r ($array);

$max = max($array);
$min = min($array);


echo "Max = " . $max . PHP_EOL;
echo "Min = " . $min . PHP_EOL;


sort($array);

print_r ($array);