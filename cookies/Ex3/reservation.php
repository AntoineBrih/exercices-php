<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=120.0">
<title>Reservation</title>
</head>
<body>

<?php
if(isset($_GET['etape'])) {
    $i = $_GET['etape'];
    
    if($i == 1){
        echo "<form action = 'reservation.php?etape=2' method= 'POST' >";
        echo '<select name="nbPers">';
        echo '<option value =2 >2</option>';
        echo '<option value =4 >4</option>';
        echo '<option value =6 >6</option>';
        echo '<option value =8 >8</option>';
        echo '</select>';
        
        
        echo '<select name="date">';
        echo '<option>23-01-2026</option>';
        echo '<option>24-01-2026</option>';
        echo '<option>25-01-2026</option>';
        echo '<option>26-01-2026</option>';
        echo '<option>27-01-2026</option>';
        echo '<option>28-01-2026</option>';
        echo '<option>29-01-2026</option>';
        echo '</select>';
        
        
        
        echo '<select name="heure">';
        echo '<option>18h</option>';
        echo '<option>18h30</option>';
        echo '<option>19h</option>';
        echo '<option>19h30</option>';
        echo '<option>20h</option>';
        echo '<option>20h30</option>';
        echo '</select>';
        
        echo "<input type = 'submit' value='Réserver'>";
        echo "</form>";
    }
    
    else{
        if($i == 2){
            if(isset($_POST["nbPers"]) && isset($_POST["date"]) && isset($_POST["heure"])){
                echo "<form action = 'reservation.php?etape=3' method= 'POST' >";
                $_SESSION["nbPers"] = $_POST["nbPers"];
                $_SESSION["date"] = $_POST["date"];
                $_SESSION["heure"] = $_POST["heure"];
                
                echo "Nombre de personnes :".$_SESSION["nbPers"];
                echo "<br>";
                echo "Heure :".$_SESSION["heure"];
                echo "<br>";
                
                echo "Date :".$_SESSION["date"];
                echo "<br>";

                echo "<label >Nom :<input name = 'nom' type='text'></label>";
                echo "<label >Numéro de téléphone :<input name = 'tel' type='number'></label>";
                echo "<label >Email :<input type='text' name = 'email'></label>";
                echo "<label >Demande spéciale :<input name = 'dmd' type='text'></label>";
                echo "<input type='submit' value='Confirmer la réservation'>";
                echo "</form>";
            } 
            
        }
        else {
            if($i == 3){
                if(isset($_POST["nom"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["dmd"])){
                    $_SESSION["nom"] = $_POST["nom"];
                    $_SESSION["tel"] = $_POST["tel"];
                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["dmd"] = $_POST["dmd"];
                    echo "Nom :". $_SESSION["nom"];
                    echo "<br>";
                    echo "Tel :". $_SESSION["tel"];
                    echo "<br>";
                    echo "Email :".$_SESSION["email"];
                    echo "<br>";
                    echo "Demand spéciale :".$_POST["dmd"];
                }
            }
        }
    }
    
}
else{  
    echo"<h1>Réservation de table</h1>";
    echo "<h3>Restaurant Le Gourmet – Cuisine française traditionnelle </h3>";
    echo "<a href='reservation.php?etape=1'> Faire une réservation <br></a>";
}
?>


</body>
</html>


