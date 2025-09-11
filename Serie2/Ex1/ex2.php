<!doctype html>

<!--on peut écrire ici le long texte pour éviter de bourrer le code php et être plus structuré-->
<p> Je m'appelle...
	

 <?php

$nom = "Picsou";
$chose = "argent";
$argent = true;
$salaire =3000;
$salaireAn=$salaire*12;
echo "$nom";
 echo "<br>";
if ($argent == true){
	
	echo "J'adore l'$chose";
}
echo "<br>";
echo " J’en récolte environ $salaire par mois, c'est à dire $salaireAn par an ";
?>


