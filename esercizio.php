<?php


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'm'],

    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'f'],

    ['name' => 'Giulia', 'surname' => 'Bianchi', 'gender' => 'NB'],


   ];

   foreach ($users as $user){
 if ($user ['gender'] == "m"){
    echo "Buongiorno sig. $user[name] $user[surname] \n";
 } else if ($user ['gender'] == "NB") {
    echo "Buongiorno $user[name] $user[surname] \n";
 } else {
    echo "Buongiorno sig.ra $user[name] $user[surname] \n";
   }
}





$numeri = [1,2,3,4,5,6,7,8,9,10];

$somma = 0;
$conteggio = 0;


foreach ($numeri as $numero) {
  if ($numero % 2 == 0) { 
    $somma = $somma + $numero;
    $conteggio++;
  }
}

echo "La media dei numeri pari è: " . $somma/$conteggio;




for ($i = 1; $i <= 100; $i++){
    if($i %3 == 0 && $i %5 == 0){
    echo "stampo $i HACKADEMY \n";
    }  else if ($i %3 ==0) {
    echo "stampo $i PHP \n";
    } else if ($i %5 ==0)
    echo "stampo $i JAVASCRIPT \n";
}





   




 

