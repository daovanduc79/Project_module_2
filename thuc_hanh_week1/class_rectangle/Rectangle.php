<?php

class My_Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function getPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }

}