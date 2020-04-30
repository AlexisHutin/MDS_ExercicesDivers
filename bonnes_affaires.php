<?php
/*

ENONCE

Pendant les soldes d'hiver, les bonnes affaires partent vite. 
C'est souvent le premier arrivé sur place qui déniche les bonnes occasions. 
Une seule solution : se rendre dans un maximum de magasins en quelques heures.

Afin d'optimiser au maximum votre temps, 
vous décidez de créer votre propre comparateur de prix. 
Vous alimentez votre comparateur depuis une base de données contenant des catalogues 
de produits provenant de plusieurs enseignes différentes.

L'objectif de ce challenge est de déterminer le prix le plus bas pour un produit donné. 
Un produit peut apparaître plusieurs fois dans le comparateur avec des prix différents 
(en fonction du prix affiché par les différentes enseignes).

---

EXPLICATIONS DES DONNEES

Ligne 1 : un entier N compris entre 10 et 10000 représentant le nombre de produits 
dans votre comparateur.
Ligne 2 : une chaîne P comprenant entre 2 et 50 caractères représentant le produit recherché.
Lignes 3 à N+2 : une chaîne comprenant entre 2 et 50 caractères et un entier 
séparés par un espace représentant respectivement le nom d'un produit et le prix associé. 
Le produit P apparaîtra au moins une fois dans la liste.


---

RESULTAT ATTENDU

Un entier représentant le prix le plus bas du produit P dans la liste.

*/
$jeuTest = [37, 'armoire', 'armoire 16', 'armoire 38', 'armoire 83', 'four 82', 'armoire 85', 'armoire 17', 'tv 41', 'armoire 91', 'armoire 92', 'four 5',
'tv 67', 'four 69', 'armoire 48', 'four 46', 'tv 65', 'armoire 93', 'tv 95', 'armoire 99', 'armoire 96', 'armoire 20', 'armoire 87', 'four 53', 'four 16', 'armoire 83', 'tv 51', 'four 57', 'four 57',
'four 58', 'four 22', 'armoire 31', 'armoire 15', 'four 14', 'tv 37', 'armoire 64', 'tv 12', 'four 58', 'four 92']; // 15

$nbProd = $jeuTest[0];
$produitRecherche = $jeuTest[1];
$min = 100*100;
for ($i = 2; $i < $nbProd + 2; $i++){
    $produit = explode(' ', $jeuTest[$i]);
    if ($produit[0] == $produitRecherche){
        if (intval($produit[1]) < $min){
            $min = intval($produit[1]);
        }
    }
}
echo "le prix le plus bas pour $produitRecherche est $min.";