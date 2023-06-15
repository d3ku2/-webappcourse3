<?php
function cut($str,$countChar = 10){
    return substr($str,0,$countChar);
}
echo cut("Hello world!!!",5);