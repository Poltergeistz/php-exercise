<html>
 <head>
  <title>Exercice 1</title>
 </head>
 <body>
    <?php /* #PHP - Les paramètres d'URL ##Exercice 1 Faire une page index.php.
    Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
    index.php?nom=Nemare&prenom=Jean */
    echo $_GET['nom'] . "\n" . $_GET['prenom'];
    ?> 
 </body>
</html>