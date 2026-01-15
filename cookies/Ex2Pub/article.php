<?php
if(isset($_GET['cat'])) {
    
    if($_GET['cat']== 'gaming') {
        if(isset($_COOKIE['interetGaming'])){
            $i = $_COOKIE['interetGaming'];
            $i++;
            setcookie('interetGaming', $i, time() + 60 * 60 * 24 * 7);
        }
        else{
            setcookie('interetGaming', 1, time() + 60 * 60 * 24 * 7);
        }
        
    }

    if($_GET['cat']== 'sport') {
     
if(isset($_COOKIE['interetSport'])){
    $i = $_COOKIE['interetSport'];
    $i++;
    setcookie('interetSport', $i, time() + 60 * 60 * 24 * 7);
}
else{
    setcookie('interetSport', 1, time() + 60 * 60 * 24 * 7);
}
    }

    if($_GET['cat']== 'voyage') {
  if(isset($_COOKIE['interetVoyage'])){
    $i = $_COOKIE['interetVoyage'];
    $i++;
    setcookie('interetVoyage', $i, time() + 60 * 60 * 24 * 7);
}
else{
    setcookie('interetVoyage', 1, time() + 60 * 60 * 24 * 7);
}
    }



        if(isset($_GET['reset'])){
            setcookie('interetVoyage','',time() -3600);
            setcookie('interetSport','',time() -3600);
            setcookie('interetGaming','',time() -3600);
        }


        }
   
          
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>i</title>
</head>
<body>



<?php
if(isset($_GET['cat'])) {
    
    if($_GET['cat']== 'gaming') {
        echo "<img src = 'Images/gaming.jfif'>";  
    }

    if($_GET['cat']== 'sport') {
        echo "<img src = 'Images/sport2.jfif'>";
    }

    if($_GET['cat']== 'voyage') {
        echo "<img src = 'Images/voyage.jfif'>";
    }

}
?>

</body>
</html>