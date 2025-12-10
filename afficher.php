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
<input type="text" id="ChampQuestion1" placeholder="La variable"><br>


<p>Question 2 : Quelle balise ouvre un bloc de code en PHP ?</p>
<input type="text" id="ChampQuestion2" placeholder ="La balise"> 


<p>Question 3 : GET ou POST : Quelle méthode affiche les données dans l'URL ?</p>
<input type ="text" id ="ChampQuestion3" placeholder ="GET ou POST">


<p>Question 4 : Quel mot clé utilise-t-on pour une condition en php ?</p>
<input type="text" id ="ChampQuestion4" placeholder = "If, While, For,... :">


<p>Question 5 : Comment concatène-t-on deux textes en PHP ? (Quel symbole)</p>
<input type ="text" id = "ChampQuestion5" placeholder ="Entre la réponse :">



<label>Afficher les réponses :</label><input type="checkbox" id="correctif"> <br>

<input value="Envoyer" type="button" onclick="envoyer()"><br>





<?php

//var_dump($_GET);

if (isset($_GET['q1']) &&
isset($_GET['q2'])&&
isset($_GET['q4'])&&
isset($_GET['q5']) &&
isset($_GET['q3']) &&
isset($_GET['correctif'])
){
  $ChampQuestion1 = $_GET['q1'];  
  $ChampQuestion2 = $_GET['q2'];  
  $ChampQuestion3 = $_GET['q3'];  
  $ChampQuestion4 = $_GET['q4'];  
  $ChampQuestion5 = $_GET['q5'];  
  $correctif = $_GET['correctif'];  
  
  $compt =0;
  if( $ChampQuestion1 == "$"){
    $compt++;
  }
  
  if( $ChampQuestion2 == "<"){
    $compt++;
  }
  
  if( $ChampQuestion3 == "GET"){
    $compt++;
  }
  
  if( $ChampQuestion4 == "if"){
    $compt++;
  }
  
  if( $ChampQuestion5 == "."){
    $compt++;
  }
  
  echo "Ton score est de ".$compt."/5<br><br>";
  
  
  if($compt <3){
    echo "Continue à apprendre, tu vas progresser !<br>";
  }
  else {
    if ($compt >2 && $compt<5) {
      echo "Tu es sur la bonne voie !<br>";
    }
    else {
      if($compt == 5){
        echo "Parfait !<br>";
      }
    }
  }
  
  
  
  
  if($correctif == "true"){
    if( $ChampQuestion1 != "$"){
      echo "Correction de la question 1: $<br>";
    }
    else{
      echo "Correct !<br>";
    }
    


    if( $ChampQuestion2 != "<"){
      echo "Correction de la question 2: <  <br>";
    }
    else{
      echo "Correct !<br>";
    }


    
    if( $ChampQuestion3 != "GET"){
      echo "Correction de la question 3: GET<br>";
    }
    else{
      echo "Correct !<br>";
    }


    
    if( $ChampQuestion4 != "if"){
      echo "Correction de la question 4: if<br>";
    }
    else{
      echo "Correct !<br>";
    }


    
    if( $ChampQuestion5 != "."){
      echo "Correction de la question 5: .<br>";
    }
    else{
      echo "Correct !<br>";
    }
  }
}
?>


<script>
function envoyer(){
  let ChampQuestion1 = document.getElementById("ChampQuestion1")
  let ChampQuestion2 = document.getElementById("ChampQuestion2") 
  let ChampQuestion3 = document.getElementById("ChampQuestion3")
  let ChampQuestion4 = document.getElementById("ChampQuestion4")
  let ChampQuestion5 = document.getElementById("ChampQuestion5")
  
  let montrer = document.getElementById("correctif").checked
  
  
  location.href="afficher.php?q1=" +ChampQuestion1.value+"&q2=" + ChampQuestion2.value+"&q3=" + ChampQuestion3.value+"&q4="+  ChampQuestion4.value+"&q5="+  ChampQuestion5.value +"&correctif="+montrer
}
</script>

</body>
</html>

