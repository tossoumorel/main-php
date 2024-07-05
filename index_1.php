<?php

// $butA = 5;
// $butB = 1;
// $total = 10;

// $condition = 1;

// if ($condition == true) {
//     echo "ok";
// }else{
//     echo "pas ok";
// }


// Boucle en php

// $arr = [
//     array ("christian" , 2),
//     array ("morel" , 3),
//     array ("Geraud" , 6),
// ];

// for($i = 0; $i < sizeof($arr) ; $i++){
//     echo "<h3>Etape $i</h3>";
//     // echo "<p>".$arr[$i][0]."</p>";

//     for ($y=0; $y < sizeof($arr[$i]) ; $y++){
//         if ($arr[$i][$y] != "christian") {
//             echo "<p>".$arr[$i][$y]."</p>";
//         } 
        
//     }
// }


// Méthode foreach

// $arr_1 = [];

// $arr_1[0] = array('morel', 2 , 4);
// $arr_1[1]= array('jude', 4 ,6);
// $arr_1[2]= array("morelus",4 , 5,6);

// var_dump($arr_1);
// foreach ($arr_1 as $key => $value){
//   echo "<p>".$key."</p>";
//   for ($i=0; $i < sizeof($value) ; $i++) { 
//     echo "<p>".$value[$i]."</p>";
//   }
// }

##La boucle while


// $arr = [10, 20, 30, 40, 50];

// $a = 0;
// while ($a < sizeof($arr)) {
//   echo '<p>'.$arr[$a]."</p>";
//   $a++;
// }

##Exercices php

// Exercices n1
$nom = "Tossou";
$prenom = "Morel";
$age = 23;
$ville = "abidjan";

echo "je m'appelle $nom $prenom et j'ai $age.\r\n je suis à $ville fggqs";
// Exercices n2

$nombre1 = 10;
$nombre2 = 20;
//  ----Somme 
echo $nombre1 +$nombre2 ;

// produit

echo $nombre1 * $nombre2;


// course codecademy:
echo "1. [thing you have to do]";
echo "\n2. [Another thing to do]";
echo "\n3. Learn to have \"fun\" ";


?>