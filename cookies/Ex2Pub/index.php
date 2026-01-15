<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Qu'est-ce qu'on ferait sans cookies</title>
</head>
<body>
<a href="article.php?cat=gaming">Gaming &#x1F619<br></a>
<a href="article.php?cat=sport">Sports &#x1F925<br></a>
<a href="article.php?cat=voyage">Voyage &#x1F615<br></a>
<a href="article.php?cat=reset">Reset &#x1F625<br></a>

<?php

if(isset($_COOKIE['interetSport'])){
    $sport = $_COOKIE['interetSport'];
}

else{
    $sport = 0;
}



if(isset($_COOKIE['interetGaming'])){
    $gaming = $_COOKIE['interetGaming'];
}

else{
    $gaming = 0;
}



if(isset($_COOKIE['interetVoyage'])){
    $voyage = $_COOKIE['interetVoyage'];
}

else{
    $voyage = 0;
}




if ($gaming > $voyage && $gaming > $sport) {
    echo'<video width="900" height="120" autoplay loop muted>';
    echo '<source src="Images/proute.mp4" type="video/mp4">';
    echo '</video>';
}
else{
    if ($voyage > $gaming && $voyage > $sport) {
        echo "<img src = 'Images/voyage.gif'>";
    }
    else{
        if ($sport > $gaming && $sport > $voyage) {
            echo "<img src = 'Images/sport.gif'>";
        }
        else{
            echo'<video width="320" height="240" autoplay loop muted>';
            echo '<source src="Images/manger.mp4" type="video/mp4">';
            echo '</video>';
        }
    }
}

?>


</body>
</html>

