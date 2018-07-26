<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercice 8</title>
 </head>
 <body>
 <?php
 /*
##Exercice 8 Sur le formulaire de l'exercice 6, 
en plus de ce qui est demandé sur les exercices précédent, 
vérifier que le fichier transmis est bien un fichier pdf. 
*/
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilité']) && pathinfo($_POST["file"]["filename"], PATHINFO_EXTENSION) == "pdf"){
  echo strip_tags($_POST['civilité'] . " " . $_POST['nom'] . " " . $_POST["prenom"] . "\n" . pathinfo($_POST["file"]["name"], PATHINFO_EXTENSION));
}
else{ ?>
<form action="/index.php" method="post" enctype="multipart/form-data">
<select name="civilité">
<option> Mr
<option> Mme
</select>
  Nom : <input type="text" name="nom">
  Prenom : <input type="text" name="prenom">
  Upload : <input type="file" name="filename">
  <input type="submit">
  </form>
<?php
}
?>
</body>
</html>