<?php
function delSameElement()
{
    $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5,'f'=>2);
    print_r(array_unique($arr));
    return $arr;
}
delSameElement();

// xóa tất cả các ptu có gtri bằng x