<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercice 6</title>
 </head>
 <body>
 <?php
 /*
##Exercice 6 Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, 
le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. 
Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page. */
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilité'])){
    echo strip_tags($_POST['civilité'] . " " . $_POST['nom'] . " " . $_POST["prenom"]);
}
else{ ?>
<form action="/index.php" method="post">
 <select name="civilité">
 <option> Mr
 <option> Mme
 </select>
    Nom : <input type="text" name="nom">
    Prenom : <input type="text" name="prenom">
    <input type="submit">
    </form>
<?php
}
?>
</body>
</html>
