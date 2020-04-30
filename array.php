<?php
define('BR', '<br />');
//
// Exercices autour des tableaux
//

// 1.
// Créer un tableau vide.
// Remplissez ce tableau avec les valeurs de 1 à 1000.
$tab = [];
for ($i = 1; $i < 1001; $i++){
    $tab[] = $i;
}
// a) En parcourant le tableau, affichez tous les multiples de 3.
// b) En parcourant le tableau, affichez les nombres multiples de 3 ET de 5.  Et compter combien il y en a.
$tabMultiple = [];
$tabMultipleX = [];
$compteurMultiple = 0;

for ($j = 0; $j < count($tab); $j++){
    if ($tab[$j] % 3 == 0){
        $tabMultiple[] = $tab[$j];
    }
    if (($tab[$j] % 3 == 0) && ($tab[$j] % 5 == 0)){
        $tabMultipleX[] = $tab[$j];
        $compteurMultiple++;
    }
}

echo 'MULTIPLE DE 3' . BR;
for ($k = 0; $k < count($tabMultiple); $k++){
    echo $tabMultiple[$k] . BR;
}

echo 'MULTIPLE DE 3 & 5' . BR;
for ($l = 0; $l < count($tabMultipleX); $l++){
    echo $tabMultipleX[$l] . BR;
}
echo "Il ya $compteurMultiple multiples de 3 & 5" . BR;

// 2.
// Créer un tableau de 5 prénoms masculins.
// Créer un tableau de 5 prénoms féminins.
// Créer un tableau de 5 aliments.
// Créer un tableau de 5 villes.
// Générer 50 phrases aléatoires du genre « Arthur et Pauline mangent une Pomme à Paris.
$premonsMasc = ['Valentin', 'Thoma', 'Romain', 'Jack', 'Pierre'];
$prenomsFemi = ['Janne', 'Marine', 'Lea', 'Lisa', 'Amelie'];
$aliments = ['une Pomme', 'une Poire', 'un Citron', 'des Cerises', 'une Orange'];
$villes = ['Rennes', 'Lyon', 'Lille', 'Paris', 'Marseille'];

for ($i = 0; $i < 50; $i++){
    $randPM = rand(0,4);
    $randPF = rand(0,4);
    $randA = rand(0,4);
    $randV = rand(0,4);

    echo $premonsMasc[$randPM] . ' & ' . $prenomsFemi[$randPF] . ' mangent ' . $aliments[$randA] . ' à ' . $villes[$randV] . BR; 
}

// 3.
// Créer un tableau de 10 valeurs comprises entre 0 et 100 aléatoirement.
// Trouver la valeur maximum  et la valeur minimum à chaque exécution du code.
// (sans utiliser les fonctions min et max)
$tableau = [];
for ($i = 0; $i < 10; $i++){
    $tableau[] = rand(1,100);
}

$max = 0;
$min = 101;

for ($j = 0; $j < count($tableau); $j++){
    if ($tableau[$j] < $min){
        $min = $tableau[$j];
    }
    if ($tableau[$j] > $max){
        $max = $tableau[$j];
    }
}
echo "Le max = $max et le min = $min" . BR;

echo '<pre>';
print_r($tableau);
echo '</pre>';