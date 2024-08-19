<?php
require_once 'functions/fileFunctions.php';
echo "Скільки останніх аргументів вивести?" . PHP_EOL;
$number = (int)fgets(STDIN);


$arguments = arguments();

$arguments = array_slice($arguments, -$number );
echo "Останні аргументи" . PHP_EOL;
print_r($arguments);
