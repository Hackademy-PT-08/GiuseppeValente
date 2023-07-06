<?php

/*


class Continent
{
  public $nameContinent;

  public function __construct($_continent){
    $this->nameContinent = $_continent; 
  }
}


class Country extends Continent {
    public $nameCountry;

}


class Region extends Continent {
    public $nameRegion;

}


class Province extends Continent {
    public $nameProvince;

}

class City extends Continent {
    public $nameCity;

}

class Street extends Continent {
    public $nameStreet;
public function __construct($_continent,$_nameCountry,$_nameRegion,$_nameProvince,$_nameCity,$_nameStreet){
        parent::__construct($_continent);
        $this->nameCountry= $_nameCountry;
        $this->nameRegion= $_nameRegion;
        $this->nameProvince= $_nameProvince;
        $this->nameCity= $_nameCity;
        $this->nameStreet= $_nameStreet;
}

public function Location($_continent,$_nameCountry,$_nameRegion,$_nameProvince,$_nameCity,$_nameStreet){
    echo  "Mi trovo in $_continent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity, $_nameStreet \n";
  
  }

}






$myLocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");


$myLocation->Location("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");


*/

/*

class Vertebrates {

   

    public function __construct(){
        $this->presentati();
    }

    protected function presentati(){
        echo "sono un animale vertebrato \n";
    }

}





class warmBlooded extends Vertebrates {
   
    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();

    }

    protected function ShowAnimal(){

        echo "sono un animale a sangue caldo \n";
    }

}


class ColdBlooded extends Vertebrates{

    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();

    }

    protected function ShowAnimal(){
        echo "sono un animale a sangue freddo \n";
    }

    
}


class Mammals extends warmBlooded{

    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();
        $this->ShowType();

    }



    protected function ShowType(){
        echo "sono un mammifero \n";
    }

    
}


class Birds extends warmBlooded{

    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();
        $this->ShowType();


    }



    protected function ShowType(){
        echo "sono un uccello \n";
    }


    
}

class Fish extends ColdBlooded{

    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();
        $this->ShowType();


    }



    protected function ShowType(){
        echo "sono un pesce \n";
    }

    
}

class Reptiles extends ColdBlooded{

    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();
        $this->ShowType();


    }



    protected function ShowType(){
        echo "sono un rettile \n";
    }

    
}

class Amphibians extends ColdBlooded{

    public function __construct(){
        $this->presentati();
        $this->ShowAnimal();
        $this->ShowType();


    }




    protected function ShowType(){
        echo "sono un anfibio \n";

    }


}


$animal = new Fish();


    

*/


    
  
    

