<?php
$conn = mysqli_connect('localhost', 'root', '', 'feteforaine');
if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fête foraine - Recherche</title>
</head>
<body>
    <form action="foraine.php" method="POST">
        <label for="type">Type d'attraction :</label>
<select name="type" id="type">
    <option value="">Toutes</option>
    <?php
    $result = mysqli_query(
        $conn,
        "SELECT DISTINCT type FROM attractions ORDER BY type ASC"
    );
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row["type"]."'>".$row["type"]."</option>";
        }
    }
    ?>
</select>
        <label for="age">Votre âge :</label>
        <input type="number" name="age" id="age" min="1" max="120">
        <input type="submit" value="Rechercher">
    </form>
</body>
</html>