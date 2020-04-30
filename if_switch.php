<?php
// 0. Créer une constante BR qui va contenir un saut de ligne HTML
define('BR', '<br />');

// On va raconter une histoire...
$histoire = '';
$nomDuHeros = 'Hector';
$distanceParcourue = 0;

// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire

$histoire .= 'Notre héros se prénome ' . $nomDuHeros . '.' . BR;

// On va définir quelques valeurs aléatoirement
$force = rand(1, 10);
$agilite = rand(1, 10);
$piecesDOr = rand(50, 100);

$jourDeLaSemaine = rand(1, 7);


//
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//

// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.
if ($force > 8){
    $agilite += 1;
    $histoire .= 'Le héro gagne 1 pt d\'agilité (+ de 8 pts de force).' . BR;
}


// 3.
// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m.
// Dans le chemin de droite, je trouve 4 pièces d'or
if ($force < 6){
    $distanceParcourue += 500;
    $histoire .= 'Le héro prend le chemin de gauche et parcoure 500m.' . BR;
}
else{
    $distanceParcourue += 850;
    $piecesDOr += 4;
    $histoire .= 'Le héro prend le chemin de droite et parcoure 850m et gagne 4 pièces d\'or.' . BR;
}

// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j'en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force
$distanceParcourue += 150;
$histoire .= 'Il parcoure 150m.' . BR;
if ($piecesDOr > 80){
    $piecesDOr -= 30;
    $agilite += 2;
    $histoire .= 'Il dépense 30 pcs pour gagner 2 pts d\'aglt.' . BR;
}
elseif ($piecesDOr < 80 && $piecesDOr > 60){
    $piecesDOr -= 15;
    $agilite += 1;
    $histoire .= 'Il dépense 15 pcs pour gagner 1 pt d\'aglt.' . BR;
}
else{
    $piecesDOr -= 5;
    $force += 1;
    $histoire .= 'Il dépense 5 pcs pour gagner 1 pt dde force.' . BR;
}



// 5. 
// Je parcours 300m
// Si ma force et mon agilité sont supérieures à 6, je gagne 10 pièce d'or
// Si ma force ou mon agilité est inférieure à 3, je perds 10 pièces d'or
// (stockez les conditions dans des variables)
$distanceParcourue += 300;
$histoire .= 'Notre héro parcoure 300m.' . BR;
$forceAgilHaut = ($force > 6) && ($agilite > 6);
$forceAgilBas = ($force < 3) && ($agilite < 3);

if ($forceAgilHaut){
    $piecesDOr += 10;
    $histoire .= 'Il gagne 10 pcs (force & agilité > 6).' . BR;
}
if ($forceAgilBas){
    $piecesDOr -=10;
    $histoire .= 'Il perd 10 pcs (force & agilité < 3).' . BR;
}
//
// Exercices autour du switch
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//


// 6.
// Indiquez dans l'histoire quel jour nous sommes (1 => lundi, 2 => mardi... 7 => dimanche)
switch ($jourDeLaSemaine) {
    case 1:
        $histoire .= 'Nous somme lundi.' . BR;
        break;
    case 2:
        $histoire .= 'Nous somme mardi.' . BR;
        break;
    case 3:
        $histoire .= 'Nous somme mercredi.' . BR;
        break;
    case 4:
        $histoire .= 'Nous somme jeudi.' . BR;
        break;
    case 5:
        $histoire .= 'Nous somme vendredi.' . BR;
        break;
    case 6:
        $histoire .= 'Nous somme samedi.' . BR;
        break;
    case 7:
        $histoire .= 'Nous somme dimanche.' . BR;
        break;
    
    }


// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité

if ($jourDeLaSemaine < 4){
    $distanceParcourue += 750;
    $force += 1;
    $histoire .= 'Le héro parcoure 750m pour se rendre à sa destination, il gagne 1 pt de force.' . BR;
}
else{
    $distanceParcourue += 1345;
    $agilite -= 1;
    $histoire .= 'Le héro parcoure 1345m pour se rendre à sa destination, il perd 1 pt d\'agilité.' . BR;
}

// 8. A l'aide d'un "switch true" déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également

switch (true) {
    case ($piecesDOr <= 20):
        $histoire .='Notre héro a entre 0 & 20 pcs.' . BR;
        break;
    
    case($piecesDOr <= 40):
        $histoire .='Notre héro a entre 21 & 40 pcs.' . BR;
        break;

    case($piecesDOr <= 60):
        $histoire .='Notre héro a entre 41 & 60 pcs.' . BR;
        break;

    case($piecesDOr <= 100):
        $histoire .='Notre héro a entre 61 & 100 pcs.' . BR;
        break;

    case($piecesDOr > 100):
        $histoire .='Notre héro a + de 100 pcs.' . BR;
        break;
}

$histoire .= "Il à parcourue $distanceParcourue m au cour de son aventure." . BR . 'FIN' . BR;

echo $histoire;
