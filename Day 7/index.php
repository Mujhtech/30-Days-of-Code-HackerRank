<?php

function arrayChallenge($arr){
    
    $stringEcho = "";

    for($i = count($arr) - 1; $i >= 0; $i--){

        if($i < count($arr) - 1){

            $stringEcho .= " ".$arr[$i];

        } else {

            $stringEcho .= $arr[$i];

        }

    }
    echo $stringEcho;
}
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

arrayChallenge($arr);

fclose($stdin);
