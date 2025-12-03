<?php
$nom_utilisateur = "Jean Martin";
$theme_couleur = "vert";
$mode_sombre = true;
$taille_police = "normale";
$afficher_avatar = true;
$statut_en_ligne = false;
$img ="pdp.img"
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>

<?php 
echo $nom_utilisateur; 
?>


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



.nom{
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
        echo "color : 3px solid #3498db;";
    }
    else{
        if($theme_couleur == "vert"){
            echo "color :3px solid #2ecc71;";
        }
        else{
            if($theme_couleur == "rouge"){
                echo "color :3px solid #e74c3c;";
            }
            else{
                if($theme_couleur == "violet"){
                    echo "color :3px solid #9b59b6;";
                }
                else{
                    if($theme_couleur == "caca"){
                        echo "color :3px solid #614b3a;";
                    }
                }
            }
        }
    }
    
?>
}



#profil-container{
    width: 600px;
    height :500px;
    margin-left : auto;
    margin-right : auto;
    
    
    
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



<section id= "avatar">
<div id="profil-container">
<header> 
<?php 

echo "<h1 class = 'nom'>$nom_utilisateur</h1>";
echo "<br>";
echo "<h1 class = 'nom'><img src = '$img'></h1>";
echo "<br>";
echo "Bonjour ! Je suis Jean Jésus, dévellopeur passioné par les technologies web.";
echo "<br>";
echo "<br>";
echo "J'aime créer des solution innovantes et partager mes connaissances avec la communauté.";
echo "<br>";
?>
</header>


</section>
<section id ="à propos">
</section>
<section id ="footer"></section>


</div>

</body>
</html>