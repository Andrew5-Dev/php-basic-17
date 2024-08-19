<?php

namespace hw\hw15;

use Exception;

class Circle extends Figure
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @param float $radius
     * @throws Exception
     */
    public function setRadius(float $radius): void
    {
        if ($radius < 0) {
            throw new Exception("Радіус має бути більше 0!");
        }
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() : float
    {
        return 2 * pi() * $this->radius;
    }

    public function showPerimeter(): void
    {
        echo "Периметр кола: " . $this->getPerimeter() . PHP_EOL;
    }

    public function showArea(): void
    {
        echo "Площа кола: " . $this->getArea() . PHP_EOL;
    }

}