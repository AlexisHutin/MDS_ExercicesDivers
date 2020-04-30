<?php
/*

ENONCE

Vous avez mis en place un site de recommandations de restaurants. 
A partir des opinons laissées par les visiteurs, 
vous avez pu construire pour chaque restaurant 3 notes sur 20 :
- Qualité de la nourriture
- Qualité de la salle
- Qualité du service

Pour classer les restaurants, vous calculez un score qui correspond à la moyenne de ces 3 notes.

---

EXPLICATIONS DES DONNEES

trois entiers compris entre 0 et 20 et séparés par des espaces représentant respectivement 
les notes que vous avez calculées à partir des opinions des visiteurs pour la nourriture, 
la salle et le service pour un restaurant donné.

---

RESULTAT ATTENDU
Un entier représentant le score du meilleur restaurant de votre base arrondi à l'entier supérieur.

*/
$jeuTest = ['6 14 14', '16 14 10', '18 4 19', '11 18 20', '6 2 10', '0 7 17', '20 4 17', '1 14 11',
'12 5 13', '15 0 3', '6 14 6', '1 3 9', '14 3 3', '16 1 11', '2 12 9', '12 20 7', '10 5 12', '3 9 18',
'1 11 19', '20 15 3', '6 17 8', '11 8 8', '4 15 3', '1 10 3', '8 16 17', '9 19 5', '20 16 18', '4 16 11', '9 9 4', '2 17 9', '18 5 16', '3 19 19', '2 9 1', '14 16 0', '12 13 7', '6 4 14', '18 4 8', '4 4 15', '5 5 14', '13 6 1', '7 18 9', '13 16 19', '4 19 18', '1 1 4']; // 18
$max = 0;
for ($i = 0; $i < count($jeuTest); $i++){
    $notes = explode(' ', $jeuTest[$i]);
    $moyenne = ceil(($notes[0] + $notes[1] + $notes[2]) / 3);

    if ($moyenne > $max){
        $max = $moyenne;
        $rang = $i;
    }
}

echo "Le meilleur score est $max pour le restaurant numéro $rang.";