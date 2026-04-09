<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playliste test 2</title>
</head>
<body>
    <form>
        <fieldset>
        <label for="Genre">Choix du genre</label>


    <select name="genre" id="genre">
        <option id="rap">Rap</option>
        <option id="Classic">Classic</option>
        <option id="Electro">Electro</option>
        <option id="Podcast">Podcast</option>
        <option id="Anglophone">Anglophone</option>
   </select>

   <br>



   <label for="Humeur">Humeur du moment</label>

    <select name="humeur" id="humeur">
        <option value="Joie">Joie</option>
        <option value="Triste">Triste</option>
        <option value="Motivant">Motivant</option>
        <option value="Calme">Calme</option>
        <option value="Mélancolie">Mélancolie</option>
    </select>


     <label>Quantité de chansons dans la playliste <input type="number" id="nb"></label>
     <button onclick="envoyer()">Générer ma playliste</button>
        </fieldset>
    </form>



    <script>
        function envoyer(){
            let genre = document.getElementById("genre");
            let humeur = document.getElementById("humeur");
            let nb = document.getElementById("nb");
            location.href="musique.php?genre="+genre.value+"&humeur="+humeur.value+"&nb="+nb.value;
        }
    </script>

</body>
</html>