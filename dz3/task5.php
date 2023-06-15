<?php

$arr = [5,24,17,12,601,1];
function outArr($arr){
    array_walk_recursive($arr,function($value,$key){
        echo $key.")";
        echo $value."<br>";
    });
}
echo outArr($arr);
echo '<br>';
function recursWalkArray($arr,$i=0){
    echo $i.") ".$arr[$i].'<br>';
    $i++;
    if($i < count($arr)){
        recursWalkArray($arr,$i);
    }
}
echo recursWalkArray($arr);