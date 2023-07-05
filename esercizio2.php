<?php


class Company {
    public $name;
    public $location;
    public $tot_employees;
    public static $avg_wage = 1500;
    public static $total= 0;
    


    public function __construct($_name, $_location, $_tot_employees){
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        self::$avg_wage;
}

public function Mostrami(){
    if($this->tot_employees == 0) {
    echo "l'ufficio $this->name con sede in $this->location non ha dipendenti \n";
    }else{
     echo "l'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti \n";
    }


}

public function spesa_annuale(){
   $annual = ($this->tot_employees * self::$avg_wage)* 12;
   echo "la spesa annuale di $this->name è di $annual euro \n";
   self::$total += $annual;
}

public static function total(){
    echo "La somma di tutte le aziende è " .self::$total . " Euro \n";
}


}





$company1 = new Company ("Aulab", "Italia", 50);
$company2 = new Company ("Boolean", "Francia", 0);
$company3 = new Company ("Epicode", "Spagna", 30);
$company4 = new Company ("Logics", "inghilterra", 25);
$company5 = new Company ("Lab51", "Stati Uniti", 80);


$company1->Mostrami();
$company2->Mostrami();
$company3->Mostrami();
$company4->Mostrami();
$company5->Mostrami();


$company1 -> spesa_annuale();
$company2 -> spesa_annuale();
$company3 -> spesa_annuale();
$company4 -> spesa_annuale();
$company5 -> spesa_annuale();


$company1::total();