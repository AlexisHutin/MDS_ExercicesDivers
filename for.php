<?php

//
// Exercices autour du for
//
define('BR', '<br />');
// 1.
// Ecrivez 100 fois : « Je ne copierais pas le code PHP de mon voisin »
for ($i = 0; $i < 100; $i++){
    echo 'Je ne copierais pas le code PHP de mon voisin' . BR;
}

echo BR;

// 2.
// Ecrivez 150 fois : « Je ne copierais pas le code PHP de mon voisin » en affichant chaque numéro de ligne : 
// 1)
// 2)
// etc.
for ($i = 0; $i < 100; $i++){
    echo $i + 1 . ') Je ne copierais pas le code PHP de mon voisin' . BR;
}

echo BR;
// 3.
// Trouver la somme des 100 premiers nombres : 1 + 2 + 3 + … + 100 = ?
$somme = 0;
for ($i = 0; $i < 100; $i++){
    $somme += $i + 1;
}
echo "La somme des 100 premiers nombres est égale à $somme" . BR;
echo BR;
// 4.
// Trouver la somme des 100 premiers nombres pairs : 2 + 4 + 6 + … + 200 = ?
$sommePaire = 0;
for ($i = 1; $i <= 200; $i++){
    if ($i % 2 == 0){
        $sommePaire += $i;
    }
}
echo "La somme des 200 premiers nombres paire est égale à $sommePaire" . BR;
echo BR;

// 5.
// Trouver la différence entre la somme des carrés des 100 premiers nombres et le carré de la somme des 100 premiers nombres :
// (1^2 + 2^2 + 3^2 + … + 100^2) - (1 + 2 + 3 + … + 100)^2
$sommeCarre = 0;
for ($i = 1; $i < 101; $i++){
    $sommeCarre += $i * $i;
}
$carreSomme = $somme * $somme;
$diff = $sommeCarre - $carreSomme;
echo $sommeCarre . BR;
echo $carreSomme . BR;
echo "La différence entre la somme des carrés des 100 premiers nombres et le carré de la somme des 100 premiers nombres est égale à $diff." . BR;
echo BR;

// 6. 
// Vérifier la répartition de la fonction rand
// Nous allons vérifier si la répartition des valeurs de rand est « correcte », c’est à dire que toutes les valeurs sont équitablement proposées.
// On va tester rand(1,5).
// Regarder la répartition dans une boucle de 10 distributions, puis 100, puis 1000, puis 10000.
$base = 1000;
$un = 0;
$deux = 0;
$trois = 0;
$quatre = 0;
$cinq = 0;
for ($i = 0; $i < $base; $i++){
    $nbRand = rand(1,5);
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
    }
}
$pcUn = 100 * ($un / $base);
$pcDeux = 100 * ($deux / $base);
$pcTrois = 100 * ($trois / $base);
$pcQuatre = 100 * ($quatre / $base);
$pcCinq = 100 * ($cinq / $base);

echo "un = $pcUn" . '%' . BR . "deux = $pcDeux" . '%' . BR . "trois = $pcTrois" . '%' . BR . "quatre = $pcQuatre" . '%' . BR . "cinq = $pcCinq" . '%' . BR;
