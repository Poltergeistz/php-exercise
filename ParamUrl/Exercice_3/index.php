<html>
 <head>
  <title>Exercice 3</title>
 </head>
 <body>
 <?php
/* ##Exercice 3 Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?dateDebut=2/05/2016&dateFin=27/11/2016 */
if(isset($_GET['dateDebut']) && ($_GET['dateFin'])) {
    echo $_GET['dateDebut'] . "\n" . $_GET['dateFin'];
    }
    if(!isset($_GET['dateDebut']) && ($_GET['dateFin'])) {
    echo "le querystring ne contient pas les bons paramètres";
    }
?>
</body>
</html>
