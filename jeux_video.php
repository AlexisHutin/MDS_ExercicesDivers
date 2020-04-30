<?php
/*

ENONCE

Vous êtes l'heureux détenteur d'une vaste et diverse collection de jeux vidéo, 
et vous vous demandez à quel point elle couvre une longue période de l'histoire du jeu vidéo. 
Pour cela, vous cherchez à déterminer quelle est la plus longue durée qui s'est écoulée entre 
les sorties de deux jeux dans votre collection.

---

EXPLICATIONS DES DONNEES

Ligne 1 : un entier N représentant le nombre de jeux dans votre collection.
Lignes 2 à N+1 : un entier indiquant l'année de parution d'un de vos jeux.

---

RESULTAT ATTENDU

Un entier, représentant la plus grande différence (en nombre d'années) 
entre deux années de parution.

*/
//$jeuTest = [3, 2017, 1997, 2015]; // 20
//$jeuTest = [2, 2001, 2001]; // 0
$jeuTest = [20, 2003, 1995, 2011, 2014, 2011, 1998, 2000, 2010, 2015, 2004, 2016, 2018, 1994, 2011, 1995, 1983, 2007, 1985, 2000, 2018]; // ?

$nbJeux = $jeuTest[0];
$min = 5000;
$max = 0;

for ($i = 1; $i < $nbJeux; $i++){
    if ($jeuTest[$i] < $min){
        $min = $jeuTest[$i];
    }
    if ($jeuTest[$i] > $max){
        $max = $jeuTest[$i];
    }
}
 $diff = $max - $min;

 echo "La plus grande différence entre deux années de parution est de $diff ans.";