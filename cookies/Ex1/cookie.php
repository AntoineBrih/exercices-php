<?php
if(isset($_POST['nom'])&&
isset($_POST['prenom']) && 
isset($_POST['age']) &&
isset($_POST['color'])){
    setcookie('nom', $_POST['nom'], time() + 60 * 60 * 24 * 7);
    setcookie('prenom', $_POST['prenom'], time() + 60 * 60 * 24 * 7);
    setcookie('age', $_POST['age'], time() + 60 * 60 * 24 * 7);
    setcookie('color', $_POST['color'], time() + 60 * 60 * 24 * 7);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cookies</title>


<style>

*{
    <?php 
    if(isset($_POST['color'])){
        echo 'background-color:' . $_POST['color'];
    }
    else{
        if(isset($_COOKIE['color'])){
            echo 'background-color:' . $_COOKIE['color'];
        }
    }
    
    
    ?>
}
</style>


</head>
<body>

<h1>Cookies</h1>
<form method ='POST' action ="cookies.php">

<label>Entrez votre nom :</label>
<input type="text" id="nom" name="nom" >
</input><br>

<label>Entrez votre prenom :</label>
<input type="text" id="prenom" name="prenom" >
</input><br>


<label>Entrez votre age :</label>
<input type="number" id="age" name="age"><br>

<label>Couleur du texte</label>
<select type="text" id="color" name="color">
<option value = "green">Vert</option>
<option value = "red">Rouge</option>
</select>

<input type="submit" value="Envoyer" >
</form>  

</body>
</html>



