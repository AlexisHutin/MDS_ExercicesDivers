<?php
define('BR', '<br />');
//
// Exercices autour du while
//


// 1.
// L'énigme de l'escargot
// Un mur fait 20 mètres de haut.
// Tous les jours l’escargot grimpe 6 mètres.
// Mais la nuit, il redescend de 4 mètres, en glissant dans son sommeil.
// En combien de jours arrive t-il en haut ?
$distanceParcourue = 0;
$jour = 0;
while ($distanceParcourue < 20){
    $jour++;
    echo "-- JOUR $jour --" . BR;
    $distanceParcourue += 6;
    echo 'L’escargot grimpe 6 mètres.' . BR;
    $distanceParcourue -= 4;
    echo 'Il redescend de 4 mètres, en glissant dans son sommeil.' . BR;
}
echo "L'escargot à mis $jour jours pour arriver en haut du mur." . BR;
echo BR;


// 2. 
// Trouver toutes les valeurs entre 1 et 10
// Déterminer combien de fois il faut lancer la fonction rand(1,10) pour obtenir au moins 1 fois chaque valeur  (Ce nombre va bien sûr changer à chaque lancement du code)
$un = 0;
$deux = 0;
$trois = 0;
$quatre = 0;
$cinq = 0;
$six = 0;
$sept = 0;
$huit = 0;
$neuf = 0;
$dix = 0;

$condition = ($un != 0 && $deux != 0 && $trois != 0 && $quatre != 0 && $cinq != 0 && $six != 0 && $sept != 0 && $huit != 0 && $neuf != 0 && $dix != 0);
$compteur = 0;

while (!$condition){
    $nbRand = rand(1,10);
    //echo $nbRand . BR;
    switch ($nbRand) {
        case 1:
            $un++;
            break;
        case 2:
            $deux++;
            break;
        case 3:
            $trois++;
            break;
        case 4:
            $quatre++;
            break;
        case 5:
            $cinq++;
            break;
        case 6:
            $six++;
            break;
        case 7:
            $sept++;
            break;
        case 8:
            $huit++;
            break;
        case 9:
            $neuf++;
            break;
        case 10:
            $dix++;
            break;
    }
    $condition = ($un != 0 && $deux != 0 && $trois != 0 && $quatre != 0 && $cinq != 0 && $six != 0 && $sept != 0 && $huit != 0 && $neuf != 0 && $dix != 0);
    $compteur++;
}
echo "Il faut $compteur lancers pour avoir au moins 1 fois chaque valeurs." . BR;

// 3. 
// Recommencer l'exercice 2 en intégrant un "bloqueur" fixé à 20. C'est à dire que vous ne pourrez pas réaliser + de 20 itérations. Indiquez le résultat trouvé.

$unx = 0;
$deuxx = 0;
$troisx = 0;
$quatrex = 0;
$cinqx = 0;
$sixx = 0;
$septx = 0;
$huitx = 0;
$neufx = 0;
$dixx = 0;

$compteurDeux = 0;
$conditionx = ($unx != 0 && $deuxx != 0 && $troisx != 0 && $quatrex != 0 && $cinqx != 0 && $sixx != 0 && $septx != 0 && $huitx != 0 && $neufx != 0 && $dixx != 0);

while (!$conditionx && $compteurDeux < 20){
    $nbRandx = rand(1,10);
    //echo $nbRand . BR;
    switch ($nbRandx) {
        case 1:
            $unx++;
            break;
        case 2:
            $deuxx++;
            break;
        case 3:
            $troisx++;
            break;
        case 4:
            $quatrex++;
            break;
        case 5:
            $cinqx++;
            break;
        case 6:
            $sixx++;
            break;
        case 7:
            $septx++;
            break;
        case 8:
            $huitx++;
            break;
        case 9:
            $neufx++;
            break;
        case 10:
            $dixx++;
            break;
    }
    $conditionx = ($unx != 0 && $deuxx != 0 && $troisx != 0 && $quatrex != 0 && $cinqx != 0 && $sixx != 0 && $septx != 0 && $huitx != 0 && $neufx != 0 && $dixx != 0);
    $compteurDeux++;
}
echo "Il faut $compteurDeux lancers pour avoir au moins 1 fois chaque valeurs (valeur max 20)." . BR;
