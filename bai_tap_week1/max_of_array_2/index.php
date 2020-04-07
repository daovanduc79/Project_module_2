<?php
$arr = [
    [3, 8, 2, -1],
    [5, 11, 9, -2],
    [1, 7, 10, 5]
];

function findMax($arr)
{
    $max = $arr[0][0];
    $x = 0;
    $y = 0;

    foreach ($arr as $key_x => $item) {
        foreach ($item as $key_y => $value) {
            if ($value > $max) {
                $max = $value;
                $x = $key_x;
                $y = $key_y;
            }
        }
    }
    return 'giá trị lớn nhất của mảng là : ' . $max . ' ở vị trí có tọa độ [' . $x . ', ' . $y . ']';
}

echo findMax($arr);
