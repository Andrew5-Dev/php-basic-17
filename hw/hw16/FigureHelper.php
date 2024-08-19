<?php

namespace hw\hw16;
use Exception;

trait FigureHelper
{
    public function __construct(float $length, float $width)
    {
        $this->setLength($length);
        $this->setWidth($width);
    }
    public function getArea(): float
    {
        return $this->length * $this->width;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }

    /**
     * @param float $length
     * @throws Exception
     */
    public function setLength(float $length): void
    {
        if ($length < 0) {
            throw new Exception("Довжина має бути більше 0!");
        }
        $this->length = $length;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    public function setWidth(float $width): void
    {
        if ($width < 0) {
            throw new Exception("Ширина має бути більше 0!");
        }
        $this->width = $width;
    }
}