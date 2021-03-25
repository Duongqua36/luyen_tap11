<?php

function DeleteE($array, $k)
{
    for ($i = $k - 1; $i < count($array); $i++) {
        $array[$i] = $array[$i + 1];
    }
    return $array;
}

$array = [1, 2, 3, 45, 6,56];
$k = 5;
print_r(DeleteE($array, $k));
// xóa phần tử thứ k trong mảng