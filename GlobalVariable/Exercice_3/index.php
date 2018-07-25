<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        Login : <input type="text" name="login"/>
        Password : <input type="password" name="password"/>
        <input type="submit"/>
</form>
<?php
setcookie("elmo","cookie",time()+60);
/*name is your cookie's name
value is cookie's value
$int is time of cookie expires*/
?>
<?php 
/* ##Exercice 3 Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
A la validation du formulaire, stocker les informations dans un cookie. */
echo $_COOKIE["elmo"];
?> 
</body>
</html>