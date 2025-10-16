<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <form  method="POST" action="login.php">
Pseudo: <input type="text" name="pseudo"><br>
Mot de passe: <input type="text" name="mdp"><br>

</form>
<?php

//formulaire log in
if(isset ($_POST ['pseudo']) && isset ($_POST ['mdp'])){
    $pseudo =$_POST ['pseudo'];
    $mdp =$_POST ['mdp'];
}




if($pseudo == "Abrh27" && $mdp == "Mdp123"){
    header ("Location:phpstyle.php");
}
else{
    header ("Location:erreur.php");
}
?>



</body>
</html>

