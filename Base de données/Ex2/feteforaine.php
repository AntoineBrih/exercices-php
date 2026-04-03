<!DOCTYPE html>
<html>
<head>
<title>Fête foraine</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'feteforaine');
if (!$conn) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}
if (isset($_POST['type']) && !empty($_POST['type']) && 
isset($_POST['age'])&& $_POST['age'] !== '') {
    $stmt = mysqli_prepare($conn, "SELECT * FROM attractions WHERE type = ? 
AND age_minimum <= ?");
    mysqli_stmt_bind_param($stmt, "si", $_POST['type'], $_POST['age']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} elseif (isset($_POST['type']) && !empty($_POST['type'])) {
    $stmt = mysqli_prepare($conn, "SELECT * FROM attractions WHERE type 
= ?");
    mysqli_stmt_bind_param($stmt, "s", $_POST['type']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} elseif (isset($_POST['age']) && $_POST['age'] !== '') {
    $stmt = mysqli_prepare($conn, "SELECT * FROM attractions WHERE 
age_minimum <= ?");
    mysqli_stmt_bind_param($stmt, "i", $_POST['age']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} else {
    
    $result = mysqli_query($conn, "SELECT * FROM attractions");
}
if ($result) {
    $attractions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $attractions[] = $row;
    }
    echo "<table>";
    echo "<thead>";
    echo "<tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Âge minimum</th>
            <th>Prix (ticket)</th>
            <th>Places par tour</th>
          </tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($attractions as $row) {
        echo "<tr>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['age_minimum'] . " ans</td>";
        echo "<td>" . $row['prix_ticket'] . " €</td>";
        echo "<td>" . $row['places_par_tour'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    
    $nb = count($attractions);
    if ($nb > 0) {
        $totalPrix  = 0;
        $moinsChere = $attractions[0];
        $plusChere  = $attractions[0];
        foreach ($attractions as $row) {
            $totalPrix += $row['prix_ticket'];
            if ($row['prix_ticket'] < $moinsChere['prix_ticket'])
            $moinsChere = $row;
            if ($row['prix_ticket'] > $plusChere['prix_ticket'])
            $plusChere = $row;
        }
        echo "<p>Nombre d'attractions affichées : " . $nb . "</p>";
        echo "<p>Prix moyen d'un ticket : " . round($totalPrix / $nb, 2) . " 
€</p>";
        echo "<p>Attraction la moins chère : " . $moinsChere['nom'] . " (" . 
        $moinsChere['prix_ticket'] . " €)</p>";
        echo "<p>Attraction la plus chère : " . $plusChere['nom'] . " (" . 
        $plusChere['prix_ticket'] . " €)</p>";
    } else {
        echo "<p>Aucune attraction ne correspond à ces critères.</p>";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . 
    mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>