<?php
include "StopWatch.php";

$watch = new StopWatch();
$watch->start();

$arr = [];
for ($i = 0; $i < 15000; $i++) {
    array_push($arr, rand(10, 100));
}

function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

selectionSort($arr);

$watch ->stop();

echo "thời gian bắt đầu " . $watch ->start()."<br>";
echo "thời gian kết thúc " . $watch ->stop()."<br>";
echo "thời gian thực thi " . $watch ->getElapsedTime();