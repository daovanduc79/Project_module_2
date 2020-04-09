<?php
include 'Rectangle.php';
$width  = 10;
$height = 20;
$rectangle = new My_Rectangle($width,$height);

echo $rectangle->width.'<br>';
echo $rectangle->height.'<br>';

$rectangle->width = 20;
$rectangle->height = 30;

echo $rectangle->width.'<br>';
echo $rectangle->height.'<br>';
echo $rectangle->getPerimeter().'<br>';
echo $rectangle->getArea().'<br>';
echo ("Your Rectangle". $rectangle->display());