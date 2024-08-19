<?php

$null = null;
$null2 = null;
$bool = True;
$string = "MAX";
$string2 = "5";
$int =  5;
$float = 10.5;

echo "NULL == NULL" . PHP_EOL;

var_dump($null == $float);
var_dump($string == $int);
var_dump($string == $null);
var_dump($float == $int);
var_dump($float !== $int);
var_dump($string !== $string2);
var_dump($string == $string2);
var_dump($null == $null2);

$string2 = (int)"55";

var_dump($int != $string2);
var_dump($int === $string2);