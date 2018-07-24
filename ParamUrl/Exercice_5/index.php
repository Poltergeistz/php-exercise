<html>
 <head>
  <title>Exercice 5</title>
 </head>
 <body>
 <?php
/* ##Exercice 5 Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index.php?semaine=12 */
if(isset($_GET['semaine'])) {
    echo $_GET['semaine'];
    }
    if(!isset($_GET['semaine'])) {
    echo "le querystring ne contient pas les bons paramètres";
    }
?>
</body>
</html>
