<html>
 <head>
  <title>Exercice 4</title>
 </head>
 <body>
 <?php
/* ##Exercice 4 Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?langage=PHP&serveur=LAMP */
if(isset($_GET['langage']) && ($_GET['serveur'])) {
    echo $_GET['langage'] . "\n" . $_GET['serveur'];
    }
    if(!isset($_GET['langage']) && ($_GET['serveur'])) {
    echo "le querystring ne contient pas le bon langage et le bon serveur";
    }
?>
</body>
</html>
