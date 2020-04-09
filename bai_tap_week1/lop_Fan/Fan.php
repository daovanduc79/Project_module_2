<?php


class Fan
{
    private $speed = SLOW;
    private $isOn = false;
    private $radius = 5;
    private $color = "blue";

    public function __construct()
    {
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function isFanOn()
    {
        return $this->isOn;
    }

    public function setIsOn($isOn)
    {
        $this->isOn = $isOn;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this ->isFanOn()) {
            return " Speed is " . $this->getSpeed() . "<br>" .
                " Color is " . $this->getColor() . "<br>" .
                " Radius is " . $this->getRadius() . "<br>" . " Fan is on ";
        } else {
            return " Color is " . $this->getColor() . "<br>" .
                " Radius is " . $this->getRadius() . "<br>" . " Fan is off ";
        }
    }
}