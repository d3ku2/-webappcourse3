<?php
session_start();
if($_SESSION['updateWindow']){
    $i = $_SESSION['updateWindow'];
    
}
else{
    $i = 0;
    echo "Вас тут еще не было";
}
$i++;
$_SESSION['updateWindow'] = $i;
echo $_SESSION['updateWindow'];

