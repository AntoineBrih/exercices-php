<!--Antoine Brihaye-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>

</head>
<body>

<h1>Réservation à la maison médicale</h1>
<form method =$_POST action ="reservation.php">
<label>Entrez votre nom :</label>
<input type="text" id="nom" name="nom" >
</input>

<label>Entrez le type de rendez-vous :</label>
<select type="select" id="rdv" name="rdv" >
<option>Médecine généraliste</option>
<option>Kinésithérapie</option>
<option>Psychologie</option>
<option>Logopédie</option>
</select><br>

<label>Entrez une date :</label>
<input type="date" id="date" name="date">

<label>Entrez un créneau horraire :</label>
<select type="select" id="horraire" name="horraire" >
<option>Matin</option>
<option>Après-midi</option>
<option>Soir</option>
</select><br>


<input type="submit" value="Envoyer" >
</form>  

</body>
</html>


<?php
if(isset($_POST['nom'])&&
isset($_POST['rdv']) && 
isset($_POST['date']) && 
isset($_POST['horraire'])){


    if($_POST['nom'] == ""){
        echo "Merci de bien remplir le formulaire";
    }else{
         echo "Votre réservation à la maison médicale de Beauraing city a bien été enregistrée<br>";
    
    if($_POST['rdv']== "Médecine généraliste"){
        echo "Type de service :" .$_POST['rdv'] . "<br>";
    }
    
    
    
    if($_POST['horraire']== "Matin"){
        echo "Horraire : Matin<br>";
    }
    
    if($_POST['horraire']== "Après-midi"){
        echo "Horraire : Après-midi<br>";
    }
    
    if($_POST['horraire']== "Soir"){
        echo "Horraire : Matin<br>";
    }
    
    $code  = "RES-";
    for ($i=0; $i < 6; $i++) { 
        $nombre = rand(0,9);
        $code = $code . $nombre;
    }
    echo $code;
    }
   
    
    
    
    
}




?>
