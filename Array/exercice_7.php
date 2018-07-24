<?php
/* ##Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département
de la ville de Reims. */
$departements = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
];
$departements[51] = 'Marne';
echo print_r($departements);
?>