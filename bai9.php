<?php
//function findMax($array){
//    $max = $array[0];
//    for($i=1;$i<count($array);$i++){
//        if($array[$i]>$max){
//            $max = $array[$i];
//        }
//    }
//    return $max;
//}
//$arr=[1,4,7,15,29];
//print_r(findMax($arr));
// lấy ra giá trị lớn nhất trong mảng



//number = array(1,3,2,5,4);
//sort($number);
//
//foreach($number as $n){
//    echo "$n <br>";
//}

function sapXep($array)
{
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - 1; $j++) {
            if ($array[$j] >= $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
$arr= [1, 3, 5, 4, 2, 7, 6];
print_r(sapXep($arr));
// sắp xếp theo thứ tự tăng dần


//$number = array(4,3,1,2);
//rsort($number);
//
//foreach($number as $n){
//    echo "$n <br>";
//}
// sắp xếp theo thứ tự giảm dần