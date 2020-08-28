<?php

// Complete the factorial function below.
function factorial($n) {

 $result = 1;
 if($n > 1){
  for($i = 2; $i <= $n; $i++){
   $result *= $i;
  }
 }
 return $result;


}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
