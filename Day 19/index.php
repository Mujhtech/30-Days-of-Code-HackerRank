<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}
/*
 * Write your code here
 */

class Calculator implements AdvancedArithmetic {

    public $sum;

    function divisorSum($n) {
        
        $this->sum = 0;

        for($i = 1; $i <= $n; $i++){

            if($n % $i == 0){
                $this->sum += $i;
            }
        }

        return $this->sum;
    }
}

$n=intval(fgets(STDIN));
