<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
</head>
<body>
    <h1>Le quizz php</h1>
    <fieldset>
    <label for="q1">Question 1</label>
    <input type="text" placeholder="2+2 ?" name="q1" id="q1">
    <br>

    <label for="q2">Question 2</label>
    <input type="text" placeholder="6x7 ?" name="q2" id="q2">
    <br>

    <label for="q3">Question 3</label>
    <input type="text" placeholder="8-1 ?" name="q3" id="q3">
    <br>

    <label for="q4">Question 4</label>
    <input type="text" placeholder="a+b ?" name="q4" id="q4">
    <br>
    
    <button onclick="envoyer()">Envoyer le formulaire</button>
    <script>
        function envoyer(){

            let q1 = document.getElementById("q1");
            let q2 = document.getElementById("q2");
            let q3 = document.getElementById("q3");
            let q4 = document.getElementById("q4");

            location.href = "get.php?q1="+q1.value+"&q2="+q2.value+"&q3="+q3.value+"&q4="+q4.value;
        }
    </script>



    </fieldset>
</body>
</html>