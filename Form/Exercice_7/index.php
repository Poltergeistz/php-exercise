<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercice 7</title>
 </head>
 <body>
 <?php
 /*
##Exercice 7 Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. 
Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.
*/
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['civilité']) && pathinfo($_POST['filename'], PATHINFO_EXTENSION) == 'pdf'){
        $path = "File : " . pathinfo($_POST['filename'], PATHINFO_FILENAME);
        echo strip_tags($_POST['civilité'] . " " . $_POST['nom'] . " " . $_POST["prenom"] . " " . $path);
    }
    else{ ?>
 <form action="/index.php" method="POST" enctype="multipart/form-data">
 <select name="civilité">
 <option> Mr
 <option> Mme
 </select>
    Nom : <input type="text" name="nom">
    Prenom : <input type="text" name="prenom">
    Upload : <input type="file" name="filename" id="filename">
    <input type="submit">
    </form>
    <?php }
?>
</body>
</html>