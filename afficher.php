<!--Antoine Brihaye 6G1-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quizz en php</title>
</head>
<body>

<h1>Quizz PHP - Concepts de base</h1>

<p>Question 1 : Quel symbole commence une variable en PHP ?</p>
<label> <input value="Tape le symbole :" type :text id="ChampQuestion1"> </label>

<p>Question 2 : Quelle balise ouvre un bloc de code en PHP ?</p>
<label> <input value="La balise :" type :text id="ChampQuestion2"> </label>

<p>Question 3 : GET ou POST : Quelle méthode affiche les données dans l'URL ?</p>
<label> <input value="GET ou POST :" type :text id="ChampQuestion3"> </label>

<p>Question 4 : Quel mot clé utilise-t-on pour une condition en php ?</p>
<label> <input value="If, While, For,... :" type :text id="ChampQuestion4"> </label>

<p>Question 5 : Comment concatène-t-on deux textes en PHP ? (Quel symbole)</p>
<label> <input type value="Tape le symbole :" :text id="ChampQuestion5"> </label><br>

<label>Afficher les réponses :<input type="checkbox" id="correctif"> </label><br>

<label><input value="Envoyer " type="button"  id="envoyer"> </label><br>





<?php
if (isset($_GET['ChampQuestion1'])){
    $ChampQuestion1 = $_GET['ChampQuestion1'];  
  }

  if (isset($_GET['ChampQuestion2'])){
    $ChampQuestion2 = $_GET['ChampQuestion2'];  
  }

  if (isset($_GET['ChampQuestion3'])){
    $ChampQuestion3 = $_GET['ChampQuestion3'];  
  }

  if (isset($_GET['ChampQuestion4'])){
    $ChampQuestion4 = $_GET['ChampQuestion4'];  
  }

  if (isset($_GET['ChampQuestion5'])){
    $ChampQuestion5 = $_GET['ChampQuestion5'];  
  }


for($i=0; $i<$reponses; $i++){
    echo $reponses."/5";
}

if($envoyer == true){
    //affiche le correctif
}

if($reponses <3){
    echo "Continue à apprendre, tu vas progresser !";
}
else {
    if ($reponses >2 && $reponses<5) {
        echo "Tu es sur la bonne voie !";
    }
    else {
        if($reponses =5){
            echo "Parfait !";
        }
    }
}

?>


<script>
function envoyer(){
    let montrer = document.getElementById("correctif").checked
    location.href="afficher.php?"="+&champQuestion1".value + "+&champQuestion2".value + "+&champQuestion3".value + "+&champQuestion4".value + "+&champQuestion5".value+ "+&correctif".value
}
</script>

</body>
</html>

