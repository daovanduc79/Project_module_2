<?php
class Calculator
{
    public function addition($number1, $number2)
    {
        if ($number1 + $number2 >= PHP_INT_MAX || $number1 + $number2 <= PHP_INT_MIN) {
            throw new Exception('Số nhập vào quá lớn hoặc quá nhỏ!');
        }
        return $number1 + $number2;
    }

    public function subtraction($number1, $number2)
    {
        if ($number1 - $number2 >= PHP_INT_MAX || $number1 - $number2 <= PHP_INT_MIN) {
            throw new Exception('Số nhập vào quá lớn hoặc quá nhỏ!');
        }
        return $number1 - $number2;
    }

    public function multiplication($number1, $number2)
    {
        if ($number1 * $number2 >= PHP_INT_MAX || $number1 * $number2 <= PHP_INT_MIN) {
            throw new Exception('Số nhập vào quá lớn hoặc quá nhỏ!');
        }
        return $number1 * $number2;
    }

    public function division($number1, $number2)
    {
        if ($number2 == 0) {
            throw new Exception('Số bị chia phải khác 0!');
        } else {
            if ($number1 / $number2 >= PHP_INT_MAX || $number1 / $number2 <= PHP_INT_MIN) {
                throw new Exception('Số nhập vào quá lớn hoặc quá nhỏ!');
            }
        }
        return $number1 / $number2;
    }
}
