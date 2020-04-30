<?php
/*

ENONCE :

Un soir, deux frères profitent de l'absence de leurs parents pour commander des burgers.
Pour ne pas laisser de trace, l'un d'entre eux doit descendre les poubelles avant minuit. 
Ils décident de se départager au jeu de la bataille. Le principe est simple, 
chaque joueur a le même nombre de cartes et à chaque tour, chaque joueur présente une carte. 
Celui qui a la carte de plus grande valeur remporte le point. 
Si les deux cartes ont la même valeur, personne ne remporte le point. 
Le gagnant du jeu est celui qui a le plus de points à la fin.

L'objectif de ce challenge est de déterminer qui ne descendra pas les poubelles ce soir 
(gagnant de la partie).

On va nommer les deux frères A et B. Pour simplifier, 
nous allons considérer que les cartes ont des valeurs pouvant aller de 1 à 10. 
Nous vous garantissons qu'il y a bien un gagnant à la fin de la partie 
(pas d'égalité possible entre les deux joueurs).

---

EXPLICATIONS DES DONNEES

Ligne 1 : un entier N compris entre 10 et 100 représentant le nombre de tours.
Lignes 2 à N+1 : deux entiers compris entre 1 et 10 séparés par un espace représentant 
la carte du joueur A et celle du joueur B.

--- 

RESULTAT ATTENDU

Le caractère A ou le caractère B représentant le gagnant de la partie.
*/
define('BR', '<br />');
//$jeuTest = [10, '10 3', '4 5', '6 10', '7 8', '4 8', '4 5', '10 2', '7 7', '10 7', '5 1']; // B
$jeuTest = [50, '4 7', '6 2', '2 4', '8 10', '4 2', '6 5', '5 7', '1 2', '6 5', '6 10', '4 6', '1 2',
'2 3', '8 1', '4 10', '10 7', '2 8', '2 4', '2 6', '2 3', '10 8', '9 6', '5 6', '7 2', '9 6', '4 1', '6 9', '8 7', '4 3', '3 5', '2 1', '5 1', '7 6', '1 3', '7 10', '4 10', '10 9', '8 3', '6 3', '5 9', '4 3', '4 1', '8 3', '4 2', '9 5', '9 8', '9 3', '10 2', '5 7','4 9']; // A

$nbCoups = $jeuTest[0];
$compteurA = 0;
$compteurB = 0;
//$coupsJoueurA = [];
//$coupsJoueurB = [];

for ($i = 1; $i < $nbCoups + 1; $i++){
    $coup = explode(' ',$jeuTest[$i]);
    $coupJoueurA = $coup[0];
    $coupJoueurB = $coup[1];

    if ($coupJoueurA > $coupJoueurB){
        echo "Manche $i joueur A gagne !" . BR;
        $compteurA++;
    }
    if ($coupJoueurB > $coupJoueurA){
        echo "Manche $i joueur B gagne !" . BR;
        $compteurB++;
    }    
}

if ($compteurA > $compteurB){
    echo 'Le joueur A a gagné !' . BR;
}
else{
    echo 'Le joueur B a gagné !' .BR;
}