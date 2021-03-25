<?php

$arrB = [14, 5, 45, -8, -9, -6, -56];
function findMax1($arrB)
{
    $length = count($arrB);
    if ($length < 1) {
        return false;
    }
    for ($i = 0; $i < $length; $i++) {
        if ($arrB[$i] < 0) {
            if ($max < $arrB[$i]) {
                $max = $arrB[$i];
            }
        }
    }
    return $max;
}

if (findMax1($arrB) == false) {
    echo "Mảng không có phần tử số âm";
} else {
    echo findMax1($arrB) . "  là phần tử số âm lớn nhất trong mảng ";
}