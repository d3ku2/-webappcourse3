<?php
function isNumberInRange($number){
    if($number > 0 && $number < 10){
        return true;
    }
    else{
        return false;
    }
}
echo isNumberInRange(3);
echo isNumberInRange(14);
echo isNumberInRange(-1);
