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

<?php
include_once("article.php");

if ($gaming > $voyage && $gaming > $sport) {
    echo'<video width="320" height="240" controls>';
    echo '<source src="pub_gaming.mp4" type="video/mp4">';
    echo '</video>';
    
}
?>


</body>
</html>

