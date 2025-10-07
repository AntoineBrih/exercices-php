<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$pseudo ="Ah27";
$mdp ="Mdp123";


if($pseudo == "Abrh27" && $mdp == "Mdp123"){
    header ("Location:page.php");
}
else{
header ("Location:erreur.php");
}
?>
</body>
</html>

