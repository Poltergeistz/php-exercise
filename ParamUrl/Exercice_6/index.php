<html>
 <head>
  <title>Exercice 6</title>
 </head>
 <body>
 <?php
/* ##Exercice 6 Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index.php?batiment=12&salle=101 */
if(isset($_GET['batiment']) && ($_GET['salle'])) {
    echo $_GET['batiment'] . "\n" . $_GET['salle'];
    }
    if(!isset($_GET['batiment']) && ($_GET['salle'])) {
    echo "le querystring ne contient pas les bons paramètres";
    }
?>
</body>
</html>
