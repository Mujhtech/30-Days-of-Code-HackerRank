<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);


$arr = array();

for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    fscanf($stdin, "%[^\n]", $firstNameEmailID_temp);
    $firstNameEmailID = explode(' ', $firstNameEmailID_temp);
    
    $pattern = "/@gmail/i";
    if(preg_match($pattern, $firstNameEmailID[1])){
        $arr[$N_itr] = $firstNameEmailID[0];
    }

    $emailID = $firstNameEmailID[1];

    //echo $firstName."\r\n";
}

asort($arr);

foreach($arr as $ar){

    echo $ar."\r\n";

}

fclose($stdin);
