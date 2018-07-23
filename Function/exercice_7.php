<?php
/* ##Exercice 7 Faire une fonction qui prend deux paramètres : age et genre. 
Le paramètre genre peut prendre comme valeur :

    Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas. */

function human($age, $gender){
    if ($age < 18){
        $age = "mineur";
        echo "Vous êtes $gender et vous êtes $age";
    }
    else
    $age = "majeur";
    echo "Vous êtes $gender et vous êtes $age";
    /* echo "Vous êtes un homme et vous êtes mineur"
    echo "Vous êtes une femme et vous êtes majeur"
    echo "Vous êtes une femme et vous êtes mineur" */
}
human(13, "un homme")
?>