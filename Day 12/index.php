<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
    public $firstName;
    public $lastName;
    public $id;
    public $scores;
  
    public function __construct($firstname, $lastname, $id, $score){

        $this->firstName = $firstname;
        $this->lastName = $lastname;
        $this->id = $id;
        $this->scores = $score;


    }
    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate(){
        
        $this->testScores = 0;

        for($i = 0; $i < count($this->scores); $i++){
            $this->testScores += $this->scores[$i];
        }

        $this->testScores = $this->testScores / count($this->scores);

        if((int)$this->testScores >= 90){

            return "O";

        } elseif((int)$this->testScores >= 80){

            return "E";

        } elseif((int)$this->testScores >= 70){

            return "A";

        } elseif((int)$this->testScores >= 55){ 

            return "P";

        } elseif((int)$this->testScores >= 40){

            return "D";

        } elseif((int)$this->testScores < 40){

            return "T";
        }

        
    }
}

$scores = array(100, 90, 80, 75, 90, 88, 84, 88, 78, 67);

$student = new Student("Mujeeb", "Adeoye", "5689", $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");

?>
