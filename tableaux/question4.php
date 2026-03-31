antoine brihaye
<?php
$pseudos = ['yennefer', 'jaskier', 'gerlat', 'tissaima', 'vesemir', 'strasbourg'];

$monstre = [
    "algoule" => ["niveau" =>5],"basilic" => ["niveau" =>1],"brouxe" => ["niveau" =>7],"arachas" => ["niveau" =>6],"banchee" => ["niveau" =>8],"alpyre" => ["niveau" =>9],
];

array_push($pseudos, "personnache");
array_push($monstre, "monstrey", 7);



echo "liste des personnages :";
echo "<br>";
foreach($pseudos as $nom) {
    echo "-".$nom;
    echo "<br>";
}

echo "liste des monstres :";
echo "<br>";
foreach($monstre as $nom) {
    echo "-".$nom . $monstre['niveau'];
    echo "<br>";
}


?>