<?php
/* ##Exercice 4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux
 */
function numbers($nb1, $nb2){
    if ($nb1 > $nb2){
    echo "Ce premier nombre " . $nb1 .  " est plus grand que " . $nb2;
    }
    elseif ($nb1 < $nb2){
    echo "Ce premier nombre " . $nb1 .  " est plus petit que " . $nb2;
    }
    elseif ($nb1 = $nb2){
    echo "Ce premier nombre " . $nb1 .  " est egal à " . $nb2;
    }
}
numbers(2,3);
?>