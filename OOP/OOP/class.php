<?php

class Student {
    
    public $name;
    public $matricnumber;
    public $score1;
    public $score2;
    public $score3;

    function __construct($name, $matricnumber, $score1, $score2, $score3) {
        $this->name = $name;
        $this->matricnumber = $matricnumber;
        $this->totalscore = $score1 + $score2 + $score3;
    }

    function get_name() {
        return $this->name;
    }

    function get_matricnumber() {
        return $this->matricnumber;
    }

    function get_totalscore() {
        return $this->totalscore;
    }

    function get_averagescore() {
        return $this->totalscore/3;
    }
}


$halima = new Student("Raji Nimotallahi", "123456","91", "95" , "99" );
echo "Name: ".$halima->get_name()."<br>"."Matric Number: ".$halima->get_matricnumber()."<br>"."Total Score: ".$halima->get_totalscore()."<br>"."Average Score: ".$halima->get_averagescore();


   

?>