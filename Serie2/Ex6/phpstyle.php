<?php
// Le nom de l'utilisateur
$nom_utilisateur = "Alex Martin";
// Le thème de l'interface : bleu, vert ou rouge
$theme_couleur = "vert";
// Indique si le mode sombre est activé ou non
$mode_sombre = true;
// Contient la taille de la police : "petite", "normale" ou "grande"

$taille_police = "normale";
// Indique si l'avatar de l'utilisateur doit être affiché
$afficher_avatar = true;
// Indique si l'utilisateur est en ligne
$statut_en_ligne = false;
$img ="pdp.img"

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php echo $nom_utilisateur; ?>

</title>

<style>
body{
    <?php 
    echo "font-family : arial;";
    if($mode_sombre == true){
        echo "background-color : #2c3e50;";
        echo "color : #ecf0f1;";
    }
    else{
        echo "background-color : #ecf0f1;";
        echo "color : #2c3e50;";
        
    }
    ?>
}



#profil-container{
    width: 600px;
    height :700px;
    margin-left : auto;
    margin-right : auto;
    text-align :center;
    
    
    <?php
    
    if( $taille_police == "petite"){
        echo "font-size : 14px;";
    }
    else{
        if($taille_police == "normale"){
            echo "font-size : 16px;";
        }
        else{
            if($taille_police == "grande"){
                echo "font-size : 18px;";
            }
        }
    }
    
    
    if($theme_couleur == "bleu"){
        echo "border : 3px solid #3498db;";
    }
    else{
        if($theme_couleur == "vert"){
            echo "border :3px solid #2ecc71;";
        }
        else{
            if($theme_couleur == "rouge"){
                echo "border :3px solid #e74c3c;";
            }
            else{
                if($theme_couleur == "violet"){
                    echo "border :3px solid #9b59b6;";
                }
                else{
                    if($theme_couleur == "caca"){
                        echo "border :3px solid #614b3a;";
                    }
                }
            }
        }
    }


    if($afficher_avatar == true){
      
    }
    
    ?>
    
}






</style>
</head>
<body>




<div id="profil-container">
<header> 
<?php 
echo "Bonjour ! Je suis Alex Martin, dévellopeur passioné par les technologies web.";
echo "<br>";
echo "J'aime créer des solution innovantes et partager mes connaissances avec la communauté.";
echo "<br>";
echo "<img src = '$img'>";

?>
</header>

<section id= "avatar">
</section>
<section id ="à propos">
</section>
<section id ="footer"></section>


</div>

</body>
</html>