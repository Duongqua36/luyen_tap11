<?php
    function findMax($array){
        if (count($array) == 0)
        return false;

        $max = $array[0];
        for($i = 1 ; $i <count($array); $i++){
            if($array[$i] > $max){
                $max = $array[$i];
            }
        }
        return $max;
    }
$arr=[1,2,3,4,5,6];
    echo"số lớn nhất ".findMax($arr);
?>