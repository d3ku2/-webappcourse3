<?php
function isEven($number){
   if($number % 2 == 0){
    return "true";
   }
   else{
    return "false"; 
    }
}
echo isEven(4);
echo isEven(2);
