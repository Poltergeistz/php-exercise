<html>
 <head>
  <title>Exercice 2</title>
 </head>
 <body>
<?php
/* ##Exercice 2 Faire une page index.php. 
Tester sur cette page que le paramètre age existe 
et si c'est le cas l'afficher sinon le signaler : 
index.php?nom=Nemare&prenom=Jean */
if(isset($_GET['age'])) {
    echo $_GET['age'];
    }
    if(!isset($_GET['age'])) {
    echo "le querystring ne contient pas l'age";
    }
?>
</body>
</html>