<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$article =$_GET ['article'];
$quantite =$_GET ['quantite'];

echo "Vous avez commandé ".$quantite." ".$article. " en latex";

if($article == "pantalon"){
    for($i=0; $quantite > $i; $i++){
    echo "<img src = 'image.png'>";
    echo "<img src = 'chienvalquipue.img'>";
    echo "<img src = 'abc.img'>";
    echo "<img src = 'luckyluque.img'>";
}
}

?>


</body>
</html>