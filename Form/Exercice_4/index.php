<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercice 4</title>
 </head>
 <body>
 <form action="/user.php" method="post">
    Nom : <input type="text" name="nom">
    Prenom : <input type="text" name="prenom">
    <input type="submit">
    </form>
 <?php
 /* ##Exercice 4 Avec le formulaire de l'exercice 2, afficher dans la page user.php 
 les données du formulaire transmises.
 */
 echo $_POST['nom'] . "\n" . $_POST['prenom'];
 ?>
</body>
</html>