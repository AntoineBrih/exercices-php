<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<label for ="genre">Choisissez un genre : </label>

<select name ="genre" id ="genre">
    <option value="Pop">Pop</option>
    <option value="Rock">Rock</option>
    <option value="Electro">Electro</option>
    <option value="hiphop">hiphop</option>
    <option value="Kpop">Kpop</option>
</select>


<label for ="Humeur">Choisissez l'humeur : </label>

<select name ="humeur" id ="humeur">
    <option value="Energique">Energique</option>
    <option value="Motivante">Motivante</option>
    <option value="Calme">Calme</option>
    <option value="Mélancolique">Mélancolique</option>

</select>


<label>Quantité :<input type="number" id="champsQuantite"></label>

    
    <button onclick="envoyer()">Générer ma playliste</button>

    <script>
    function envoyer(){
        let genre = document.getElementById("genre");
        let humeur = document.getElementById("humeur");
        let champsQuantite = document.getElementById("champsQuantite");
        location.href="musique.php?genre="+genre.value+"&humeur="+humeur.value+"&champsQuantite="+champsQuantite.value;

    }
    </script>


</body>
</html>