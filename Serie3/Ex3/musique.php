<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php



if(isset($_GET['genre']) && isset($_GET['humeur']) && isset($_GET['champsQuantite'])) {
    
    $genre = $_GET ['genre'];
    $humeur = $_GET ['humeur'];
    $champsQuantite = $_GET ['champsQuantite'];
    
    if($champsQuantite>=1 && $champsQuantite <=25){
        echo "Ta playliste genre ".$genre . " pour une humeur ". $humeur." avec $champsQuantite titres est prête !";
    }
    else{
        echo "erreur zbi";
    }
    
}


?>


</body>
</html>