<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);

//trigger exception in a "try" block
try {
    $result = is_numeric($S) ? $S : "Bad String";
    echo $result;
}
//catch exception
catch(Exception $e) {
  echo "Bad String";
}

?>
