<?php
$fileName = 'test.txt';
function readTxt($fileName){
    $data = file_get_contents($fileName);
    echo $data;
}
readTxt($fileName);
function readTxtLineByLine($fileName){
    $data = file_get_contents($fileName);
    $data = preg_split("/\n/",$data);
    echo "<br>==========<br>";
    foreach($data as $str){
        echo $str."<br>";
    }
    echo "<br>==========<br>";
}
readTxtLineByLine($fileName);