<?php
function getTxtFilesWithDir(){
    $arr=[];
    foreach(scandir('./') as $FileName){
        if(preg_match('/.txt',$FileName)){
            array_push($arr,$FileName);
            
        }
    }
    return $arr;
}
$arrNameCurrentFile = ['1.txt','2.txt','3.txt'];
foreach($arrNameCurrentFile as $val){
    if(in_array($val,getTxtFilesWithDir())){
        file_put_contents($val,"!",FILE_APPEND);
    }
}