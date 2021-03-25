<?php
function del1Element($number)
{
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    array_splice($arr, $number, 1);
    return $arr;
}
print_r(del1Element(2));
// xóa một phần tử khỏi mảng thứ k