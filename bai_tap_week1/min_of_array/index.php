<?php
$arr = [4, 8, 1, 7, -3, -1, 2, 9];

function findMin($arr)
{
    $min = $arr[0];
    $index = 0;

    foreach ($arr as $key => $value) {
        if ($min > $value) {
            $min = $value;
            $index = $key;
        }
    }
    return 'giá trị nhỏ nhất là : ' . $min . ' ở vị trí ' . $index;
}
echo findMin($arr);
