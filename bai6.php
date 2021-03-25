<?php

//$arrA = [8, 9, 7, 3, 21, 6, 45, 8];
//function add($arr, $index, $num)
//{
//    if ($index < count($arr)) {
//        array_splice($arr, $index, 0, $num);
//        return $arr;
//    }
//    for ($i = count($arr); $i < $index; $i++) {
//        array_push($arr, '');
//    }
//    array_push($arr, $num);
//    return $arr;
//}
//
//print_r(add($arrA, 3, 100000));

function addfristElemen($array,$number,$index){
    for($i= count($array);$i>=$index ;$i--){
      $array[$i+1]=$array[$i];
    }
    $array[$index -1]=$number;
    return $array;
}
$arr=[1,2,3,4,5];
$number=3;
$index=1;
print_r(addfristElemen($arr,$number,$index));