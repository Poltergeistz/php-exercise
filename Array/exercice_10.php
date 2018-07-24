<?php 
/* ##Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau
ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : 
    "Le département" + nom_departement + "a le numéro" + num_departement */

    $departements = [
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme'
    ];

    foreach($departements as $key => $value)
    {
    echo "Le département $value a le numéro $key. \n";
    }
?>
