<?php
$numberOne = $_POST['num1'];
$numberTwo = $_POST['num2'];
$isOperator = $_POST['operator'];
echo '<b>Result: </b>';
include 'calc.php';
$calculator = new Calculator();
switch ($isOperator) {
    case 'Addition':
        try {
            echo $calculator->addition($numberOne, $numberTwo);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
    case 'Subtraction':
        try {
            echo $calculator->subtraction($numberOne, $numberTwo);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
    case 'Multiplication':
        try {
            echo $calculator->multiplication($numberOne, $numberTwo);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
    case 'Division':
        try {
            echo $calculator->division($numberOne, $numberTwo);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
}