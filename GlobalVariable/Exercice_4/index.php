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
?>
<?php 
/* ##Exercice 4 Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 
et qui les affiches. */
print_r($_COOKIE)
?> 
</body>
</html>