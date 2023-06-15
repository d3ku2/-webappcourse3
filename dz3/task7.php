<?php
$fileName = "count.txt";
if(file_get_contents($fileName)){
    $i = file_get_contents($fileName);
}
else{
    $i = 0;
    file_put_contents($fileName,$i);
}
$i++;
file_put_contents($fileName,$i);