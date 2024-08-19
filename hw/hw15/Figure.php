<?php

namespace hw\hw15;

abstract class Figure
{
    abstract public function getArea(): float;
    abstract public function getPerimeter(): float;
    abstract public function showPerimeter(): void;
    abstract public function showArea(): void;

}