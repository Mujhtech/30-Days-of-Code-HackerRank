<?php

function multiplier($n){

    for($i = 1; $i <= 10; $i++){

        echo $n." x ".$i ." = ". $n*$i."\r\n";

    }

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

multiplier($n);

fclose($stdin);

?>
