<?php


use hw\hw16\Rectangle;
use hw\hw16\Square;

require_once __DIR__ . '/FigureHelper.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Square.php';

echo "Введіть довжину прямокутника" . PHP_EOL;
$lengthRectangle = (float)fgets(STDIN);

echo "Введіть ширину прямокутника" . PHP_EOL;
$widthRectangle = (float)fgets(STDIN);

echo "Введіть довжину квадрата" . PHP_EOL;
$lengthSquare = (float)fgets(STDIN);

echo "Введіть ширину квадрата" . PHP_EOL;
$widthSquare = (float)fgets(STDIN);


try {
$rectangle = new Rectangle($lengthRectangle, $widthRectangle);
$square= new Square($lengthSquare,$widthSquare);

} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
    exit;
}

echo "Площа прямокутника: " . $rectangle->getArea() . PHP_EOL;
echo "Периметр прямокутника: " . $rectangle->getPerimeter() . PHP_EOL;
echo "Площа квадрата: " . $square->getArea() . PHP_EOL;
echo "Периметр квадрата: " . $square->getPerimeter() . PHP_EOL;




