<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercice 3</title>
 </head>
 <body>
 <form action="/user.php" method="get">
    Nom : <input type="text" name="nom">
    Prenom : <input type="text" name="prenom">
    <input type="submit">
    </form>
 <?php
 /* ##Exercice 3 Avec le formulaire de l'exercice 1, 
 afficher dans la page user.php les données du formulaire transmis. */
 echo $_GET['nom'] . "\n" . $_GET['prenom'];
 ?>
</body>
</html>



