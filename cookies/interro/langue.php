<?php
//Antoine Brihaye
session_start();

$fr=1;
$en=2;

if(isset($_COOKIE["$fr"])){
    echo "«Maintenant, écoute, commençons par les trois règles fondamentales de la robotique – les trois règles qui sont gravées le plus profondément dans le cerveau positronique d’un robot.
Nous avons : Un, un robot ne peut porter atteinte à un être humain ni, restant passif, permettre qu’un être humain soit exposé au danger.
Deux, un robot doit obéir aux ordres que lui donnent les êtres humains sauf si de tels ordres entrent en conflit avec la Première Loi.
Et trois, un robot doit protéger son existence tant que cette protection ne contredit pas la Première ou la Deuxième Loi.»";
}
else{
    echo "«Now, look, let's start with the three fundamental Rules of Robotics - the three rules that are built most deeply into a robot's positronic brain.
We have: One, a robot may not injure a human being, or, through inaction, allow a human being to come to harm.
Two, a robot must obey the orders given it by human beings except where such orders would conflict with the First Law.
And three, a robot must protect its own existence as long as such protection does not conflict with the First or Second Laws.»";
}
setcookie("Francais",$fr,time()-3600);
setcookie("English",$en,time()-3600);

if(isset($_COOKIE["fr"])==isset($_COOKIE['en'])){
echo '« Maintenant, écoute, commençons par les trois règles fondamentales de la robotique – les trois règles qui sont gravées le plus profondément dans le cerveau positronique d’un robot.
Nous avons : Un, un robot ne peut porter atteinte à un être humain ni, restant passif, permettre qu’un être humain soit exposé au danger.
Deux, un robot doit obéir aux ordres que lui donnent les êtres humains sauf si de tels ordres entrent en conflit avec la Première Loi.
Et trois, un robot doit protéger son existence tant que cette protection ne contredit pas la Première ou la Deuxième Loi. »';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langues</title>
</head>
<body>
    <form method="POST">
        <option value="fr">Francais</option>
        <option value="en">English</option>
        
  </form>

</body>
</html>