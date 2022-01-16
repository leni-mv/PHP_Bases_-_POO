<?php
    // les constantes sont déclarées avec cette typographie 
    define ("SEPARATEUR", "-");

    $tabJoueur1 = [
        "nom" => "Nola", 
        "age" => 30,
        "estUnHomme" => false
    ];

    $tabJoueur2 = [
        "nom" => "Sora", 
        "age" => 26,
        "estUnHomme" => true
    ];

    $tabJoueur3 = [
        "nom" => [
            "nom1" => "Pipou", 
            "nom2" => "Pio"
        ], 
        "age" => 22,
        "estUnHomme" => true
    ];

    print_r($tabJoueur2);
    
    // $text = test();
    // echo $text;
    
    separation(SEPARATEUR);
    afficherTabJoueur($tabJoueur1);
    separation(SEPARATEUR);
    afficherTabJoueur($tabJoueur2);
    separation(SEPARATEUR);
    afficherTabJoueur($tabJoueur3);
    separation(SEPARATEUR);

    afficherJoueur($tabJoueur1["nom"], $tabJoueur1["age"], $tabJoueur1["estUnHomme"]);
    separation(SEPARATEUR);
    afficherJoueur($tabJoueur2["nom"], $tabJoueur2["age"], $tabJoueur2["estUnHomme"]);
     separation(SEPARATEUR);
     afficherJoueurLePlusAgee($tabJoueur1["age"], $tabJoueur2["age"]);
     separation(SEPARATEUR);
     $différenceAge = calculDifférenceAge($tabJoueur1["age"], $tabJoueur2["age"]);
     echo "La différence d'âge est de " . $différenceAge . "ans.";
     separation(SEPARATEUR);
     majeur($tabJoueur1["age"]);
     separation(SEPARATEUR);
     majeur($tabJoueur2["age"]);
    

     function afficherJoueur ($nom, $age, $homme){
         echo $nom;
        echo "<br>";
        echo " Aller " . $nom . " !!";

        echo " Il a " . $age + 1 . "ans aujourd'hui !! <br>";

        if($homme){
            echo "C'est un homme !!";
        } else {
             echo "C'est une femme ou autre chose oO <br> <br>";
        }
    }


//     function test() {
//         $a = 5;
//         $b = 4;
//         return $a + $b;
//     }

     function afficherJoueurLePlusAgee($ageJoueur1, $ageJoueur2) {
         if($ageJoueur1 > $ageJoueur2){
             echo "Joueur 1  est plus agée que Joueur 2";
         }

         if ($ageJoueur1 == 30){
             echo "<br>La valeur est égale";
         }

         if($ageJoueur1 === 30){
             echo "<br>La valeur et le type son égal";
         }
     }

     function calculDifférenceAge($ageJoueur1, $ageJoueur2){
         $resultat = $ageJoueur1 - $ageJoueur2;
         if($resultat < 0){
             $resultat = -$resultat;
         }
         return $resultat;
     }


     // function separation($separateur){
     //     echo "<br>";
     //     for($i = 0; $i < 20; $i++){
     //         echo $separateur;
     //     }
     //     echo "<br>";
     // }
     function separation($separateur){
         echo "<br>";
         $i = 0;
         // while ($i < 45){
         //     $i++;
         //     echo $separateur;
         // }
         do{
             $i++;
             echo $separateur;
         }while($i < 70);
         echo "<br>";
     }

     function majeur($age){
         if($age < 18){
             echo "Ce joueur est mineur";
         } else if($age === 18){
             echo "Ce joueur est tout juste majeur.";
         } else {
             echo "Ce joueur est majeur";
         }
         switch($age){
            case $age > 18 : echo "Il est majeur."; //le supérieur à ne fonctionne pas mais l'inférieur à oui Oo???
             case 18 : echo "Il vient d'être majeur."; //on préfère le if pour les > < >= >= === etc.
             case $age < 18 : echo "Il est mineur.";
          
             break;
             default : echo "On a pas son âge.";
             break;
         }
     }

     function afficherTabJoueur($tab){
         foreach($tab as $indice => $value){
             if(!is_array($value)){
                echo $indice . " : " . $value . "<br>";
             }
              else {
                    afficherTabJoueur($value);
              }
         }
     }

?>
