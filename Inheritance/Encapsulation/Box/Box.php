<?php

class Box
{
    private $length;
    private $width;
    private $height;

    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    private function setLength($length)
    {
        if($length <= 0){
            throw new Exception('Length cannot be zero or negative.');
        }
        $this->length = $length;
    }

    private function setWidth($width)
    {
        if($width <= 0){
            throw new Exception('Width cannot be zero or negative.');
        }
        $this->width = $width;
    }

    private function setHeight($height)
    {
        if($height <= 0){
            throw new Exception('Height cannot be zero or negative.');
        }
        $this->height = $height;
    }

    public function getSurfaceArea(): float
    {
        return 2 * $this->length * $this->width
        + 2 * $this->length * $this->height
        + 2 * $this->width * $this->height;
    }

    public function getLateralSurfaceArea(): float
    {
        return 2 * $this->length * $this->height
        + 2 * $this->width * $this->height;
    }

    public function getVolume(): float
    {
        return $this->length * $this->height * $this->width;
    }
}
