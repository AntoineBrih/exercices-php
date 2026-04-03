<!DOCTYPE html>
<html>
<head>
    <title>Marché artisanal</title>
    <style>
        table {
            border: 2px solid grey;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid grey;
            padding: 6px;
        }
        th {
            background-color: darkgreen;
            color: white;
        }
        tbody tr:nth-child(even) {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'marche');
if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}
$sql = "SELECT * FROM producteurs WHERE annee_installation > 2014 ORDER BY 
nom ASC";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>Commune</th>
            <th>Année d'installation</th>
          </tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['specialite'] . "</td>";
        echo "<td>" . $row['commune'] . "</td>";
        echo "<td>" . $row['annee_installation'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Erreur lors de l'exécution de la requête : " . 
mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>