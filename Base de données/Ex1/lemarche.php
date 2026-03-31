<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
</head>
<body>
    
</body>
<style>
    table *{
        border-collapse: collapse;
        border: 3px solid grey;
        
    }

    #tete{
        background-color: darkgreen;
        color: white;
    }


</style>
</html>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'marche');
if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}
$sql = "SELECT * FROM producteurs";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<table>";
    echo "<tr id='tete'>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>Commune</th>
            <th>Année d'installation</th>
          </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['specialite'] . "</td>";
        echo "<td>" . $row['commune'] . "</td>";
        echo "<td>" . $row['annee_installation'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Erreur lors de l'exécution de la requête : " . 
mysqli_error($conn);
}
?>