<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nom = "Murdock";
$prenom = "Antoine";
$vacances = true;
$img = "petitchien.png";
$img2 = "elephantmort.img";
$jourDebut = 5;
$moisDebut = 7;
$jourFin = 15;
$moisFin = 7;
  $nbJours= ($jourFin -$jourFin)+31*($nbMois - $nbJours);
//affichage

//Titre : Antoine Brh
//Texte : est parti/n'est pas parti en vacances
//Texte : Img des vacances
//--->image en question
//il est parti en vacances durant X jours

echo "<h1>$prenom $nom</h1>";

if($vacances == true){
    
  
    //$total= ;
    echo "<p> est parti en vacances $nbJours jours</p>";
    



    echo "<img src = '$img'>";
    echo "<img src = '$img2'>";
}
else{
    echo "<p> n'est pas parti en vacances</p>";
}



?>
</body>
</html>