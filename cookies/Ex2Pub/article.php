<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pub</title>
</head>
<body>




<?php
if(isset($_GET['cat'])) {
    
    if($_GET['cat']== 'gaming') {
        echo "<img src = 'gaming.jfif'>";
        
    }

    if($_GET['cat']== 'sport') {
        echo "<img src = 'sport2.jfif'>";
    }

    if($_GET['cat']== 'voyage') {
        echo "<img src = 'voyage.jfif'>";
    }



}
?>


</body>
</html>