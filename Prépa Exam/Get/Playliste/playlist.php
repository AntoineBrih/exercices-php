<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    

<h1>Créer ta playliste !</h1>
    <fieldset>
    <label for="genre">Choix du genre de musique</label>

    <select name="genre" id="genre">

    <option value="Rap">Rap</option>
    <option value="Rock">Rock</option>
    <option value="Kpop">Kpop</option>
    <option value="MusiQ">MusiQ</option>
    
</select>

<br>
<label for="humeur">Choix de votre humeur du moment</label>
<select name="humeur" id="humeur">
    <option value="joie">Je suis de toute joie</option>
    <option value="triste">POV tu fais une dépression tah les anciens</option>
    <option value="enerve">I'm tout colère colérique</option>
    <option value="melancolie">Mélan-alcoolique</option>
</select>

<button type="submit">Générer la playliste</button>

<script>
    let genre = document.getElementById("genre").value;
    let humeur = document.getElementById("humeur").value;

    location.href="playlist.php?genre="+genre.value+"&humeur="humeur.value;
    </script>

</fieldset>

</body>
</html>