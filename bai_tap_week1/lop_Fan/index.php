<?php
include "Fan.php";

$fan1 = new Fan();
$fan1 ->setIsOn(true);
$fan1 ->setColor("yellow");
$fan1 ->setRadius(10);
$fan1 ->setSpeed(FAST);

echo "Fan 1:" ."<br>" . $fan1 ->toString() ;

echo "<br>";
echo "<br>";

$fan2 = new Fan();
$fan2 ->setIsOn(false);
$fan2 ->setColor("blue");
$fan2 ->setRadius(5);
$fan2 ->setSpeed(MEDIUM);

echo "Fan 2 : " . "<br>" . $fan2 ->toString();