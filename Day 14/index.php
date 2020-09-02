<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;

// Write your code here
public function __construct($a){
    $this->elements = $a;
}

public function computeDifference(){

    $this->maximumDifference = 0;
    sort($this->elements);
    for($i = 0; $i < count($this->elements); $i++){

        if($i === count($this->elements) - 1) break;

        $next = $i + 1;
        $this->maximumDifference += $this->elements[$next] - $this->elements[$i];

    }

    return $this->maximumDifference;
}

} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>
