<?php
//antoine brihaye

$monstre = [
    "algoule" => ["niveau" =>5, "degats"=>80],
    "basilic" => ["niveau" =>1, "degats"=>120],
    "brouxe" => ["niveau" =>7,  "degats"=>200],
    "arachas" => ["niveau" =>6, "degats"=>20],
    "banchee" => ["niveau" =>8, "degats"=>160],
    "alpyre" => ["niveau" =>9,  "degats"=>10],
];

array_push($monstre, "monstrey", 7, 166);


echo "Liste des monstres :";
echo "<br>";
foreach($monstre as $nom) {
    echo $nom . $monstre['niveau'] ."-". $monstre['degats'];
    echo "<br>";
}


?>