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
/* ##Exercice 5 Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
*/
setcookie("elmo","cookie",time()+60);
?>

<?php
setcookie("elmo","cookie");
echo $_COOKIE["elmo"];
setcookie("elmo","brownie");
echo $_COOKIE["elmo"];
?>
</body>
</html>