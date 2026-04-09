<?php

if (isset($_GET['q1']) && ($_GET['q2']) && ($_GET['q3']) && $_GET['q4']) {

    if($_GET['q1'] == "4"){
        echo "Bonne réponse !";
        echo "<br>";
        echo "<br>";
    }
    else{
        echo "Mauvaise réponse !";
        echo "<br>";
        echo "La bonne réponse était : 4. Vous avez répondu :". $_GET['q1'];
        echo "<br>";
        echo "<br>";
    }

    if($_GET['q2'] == "42"){
        echo "Bonne réponse !";
        echo "<br>";
        echo "<br>";
    }
    else{
        echo "Mauvaise réponse !";
        echo "<br>";
        echo "La bonne réponse était : 42. Vous avez répondu :". $_GET['q2'];
        echo "<br>";
        echo "<br>";
    }


    if($_GET['q3'] == "7"){
        echo "Bonne réponse !";
        echo "<br>";
        echo "<br>";
    }
    else{
        echo "Mauvaise réponse !";
        echo "<br>";
        echo "La bonne réponse était : 7. Vous avez répondu :". $_GET['q3'];
        echo "<br>";
        echo "<br>";
    }


    if($_GET['q4'] == "c"){
        echo "Bonne réponse !";
        echo "<br>";
        echo "<br>";
    }
    else{
        echo "Mauvaise réponse !";
        echo "<br>";
        echo "La bonne réponse était : la couille de l'hopitalle. Vous avez répondu :". $_GET['q4'];
        echo "<br>";
        echo "<br>";
    }
}

?>