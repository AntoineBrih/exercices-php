<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
var_dump($_POST);

if(isset($_POST['Pseudo']) && isset($_POST['Email']) && isset($_POST['Platforme']) && isset($_POST['HStream']) && isset($_POST['abonnes']) && isset($_POST['HPref'])){
    
    if($_POST['Plateforme'] == "Twitch"){
        echo "Plateforme :Twitch";
    }
    
    if($_POST['Plateforme'] == "Youtube"){
        echo "Plateforme :Youtube";
    }
    if($_POST['Plateforme'] == "Tiktok"){
        echo "Plateforme :Tiktok";
    }
    
    if(isset($_POST['Val1'])){
        echo"Just chatting";
    }
    if(isset($_POST['Val2'])){
        echo"Gaming";
    }
    if(isset($_POST['Val3'])){
        echo"Créatif";
    }
    if(isset($_POST['Val4'])){
        echo"Sport";
    }
    if(isset($_POST['Val5'])){
        echo"Musique";
    }
    if(isset($_POST['Val6'])){
        echo "Musique";
    }
    
    if(isset($_POST['abonnes'])){
        echo "Vous avez :". $_POST['abonnes'];
    }
    
    if(isset($_POST['HPref'])){
        echo "Vos heures de stream préférées sont :". $_POST['HPref'];
    }
    
}


?>
</body>
</html>