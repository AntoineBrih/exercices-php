<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['Pseudo']) && isset($_POST['Email']) && isset($_POST['Plateforme']) && isset($_POST['Streampref']) && isset($_POST['NbrAbbo']) && isset($_POST['NbrStream'])){

    echo"Pseudo :".$_POST['Pseudo'];
    echo"<br>";

    if($_POST['Plateforme'] == "Twitch"){
        echo"Platforme : Twitch";
        echo"<br>";
    }
    if($_POST['Plateforme'] == "Youtube"){
        echo"Platforme : Youtube";
        echo"<br>";
    }
    if($_POST['Plateforme'] == "Tiktok"){
        echo"Platforme : Tik tok";
        echo"<br>";
    }
    if($_POST['Streampref'] == "Matin"){
        echo"Vos préférence de stream : Matin";
        echo"<br>";
    }
    if($_POST['Streampref'] == "Après-Midi"){
        echo"Vos préférence de stream : Après-Midi";
        echo"<br>";
    }
    if($_POST['Streampref'] == "Soir"){
        echo"Vos préférence de stream : Soir";
        echo"<br>";
    }
    if($_POST['Streampref'] == "Nuit"){
        echo"Vos préférence de stream : Nuit";
        echo"<br>";
    }
    if(isset($_POST['Contenu1'])){
        echo"Just chatting";
        echo"<br>";
    }
    if(isset($_POST['Contenu2'])){
        echo"Gaming";
        echo"<br>";
    }
    if(isset($_POST['Contenu3'])){
        echo"Créatif";
        echo"<br>";
    }
    if(isset($_POST['Contenu4'])){
        echo"Sport";
        echo"<br>";
    }
    if(isset($_POST['Contenu5'])){
        echo"Musique";
        echo"<br>";
    }
    
    if(isset($_POST['NbrAbbo'])){
        echo "Vous avez :".$_POST['NbrAbbo']." abonnés";
        echo"<br>";
    }

    if(isset($_POST['NbrStream'])){
        echo "Vous streamez :".$_POST['NbrStream']." heure(s)";
        echo"<br>";
    }

    if(isset($_POST['NbrAbbo'])<100 ){
        echo"Continue comme ça m'couille"; 
        echo"<br>";
    }

    if(isset($_POST['NbrAbbo'])>100 && isset($_POST['NbrAbbo'])<1000 ){
        echo"Super mon gali"; 
        echo"<br>";
    }

    if(isset($_POST['NbrAbbo'])>1000 && isset($_POST['NbrAbbo'])<100000 ){
        echo"Félicitations mon lapin de garenne"; 
        echo"<br>";
    }

    if(isset($_POST['NbrAbbo'])>100000 && isset($_POST['NbrAbbo'])<1000000){
        echo"T'es en feu ma biche #misterbeast printf(ofmg);"; 
        echo"<br>";
    }


}


?>
</body>
</html>
