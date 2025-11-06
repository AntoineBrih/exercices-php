
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<label>Article :<input type="text" id="champsArticle"></label>
<label>Quantité :<input type="text" id="champsQuantite"></label>
<button onclick="envoyer()">Envoyer</button>


<script>
    function envoyer(){
        let champArticle = document.getElementById("champsArticle");
        let champQuantite = document.getElementById("champsQuantite");
        location.href="command.php?article="+champsArticle.value+"&quantite="+champQuantite.value

    }
    </script>

</body>
</html>