<?php
require_once 'functions/fileFunctions.php';

echo "Введіть аргумент" . PHP_EOL;
$argument = (array)fgets(STDIN);
echo "Введіть аргумент" . PHP_EOL;
$argument = (array)fgets(STDIN);

write('db.txt', $argument, true);
