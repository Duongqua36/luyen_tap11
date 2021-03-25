<?php

//function addElement($number)
//{
//    $arr = array('7' => 1, '8' => 2, '9' => 3, '10' => 4);
//    array_unshift($arr, "'$number'");
//    return $arr;
//}
//$input = 6;
//print_r(addElement($input));
function addfristElemen($array,$number){
    for($i=count($array);$i>=0;$i--){
        $array[$i+1]= $array[$i];
        $array[0]=$number;

    }
    return $array;
}
$arr =[1,2,3,4,5];
$number= 9;
print_r(addfristElemen($arr,$number));