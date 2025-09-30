<!DOCTYPE html>
<html>
<head>


<?php

// number_format ($nombre, 2);
$coulF = "blue";
$coulH = "red";


$popF18 = 365252;
$popH18 = 381788;


$popFA = 1108283;
$popHA = 1107414;


$popF64 = 407211;
$popH64 = 311627;


$Total18 = $popF18 + $popH18;
$TotalA = $popFA + $popHA;
$Total64 = $popF64 + $popH64;

$TotF = $popF18 + $popFA + $popF64;
$TotH = $popH18 + $popHA + $popH64;

$bigTotal =  $TotF + $TotH;


$pourcent18F = ($popF18 / $Total18) * 100;
$pourcent18H = ($popH18 / $Total18) * 100;


$pourcentFA = ($popFA / $TotalA) * 100;
$pourcentHA = ($popHA / $TotalA) * 100;


$pourcentF64 = ($popF64 / $Total64) * 100;
$pourcentH64 = ($popH64 / $Total64) * 100;

$pourcentTotF = ($TotF / $bigTotal) *100;
$pourcentTotH = ($TotH / $bigTotal) *100;






//dollars






$nbFois18 = (int)(($popF18 / $Total18) * 20);
$nbFoisA = ($popFA / $TotalA) * 20;
$nbFois64 = ($popF64 / $Total64) * 20;
?>


<style>
#pop{
    border: solid black 3px;
}

.CouleurF{
    <?php
    echo "color :$coulF";

    ?>
}
.CouleurH{
    <?php
    echo "color :$coulH";
    ?>
}

#total{
    border: solid black 2px;
    background-color : lightgreen;
}

#categorie{
    border: solid black 2px;
}
</style>

</head>

<body>
<table id="pop">
<tr id='categorie'>
<th>Catégorie</th>
<th>Femmes</th>
<th>Hommes</th>
<th>Graphique</th>
</tr>



<?php
echo "<tr>";
echo "<td>De moins de 18 ans :</td>";
echo "<td class= 'CouleurF'>$popF18 ($pourcent18F)</td>";
echo "<td class= 'CouleurH'>$popH18 ($pourcent18H)</td>";

echo "<td>";
for($i=0; $i<$nbFois18; $i++){
    echo "<span class ='CouleurF'>$</span>";
}

for($i=0; $i < 20-$nbFois18; $i++){
    echo "<span class ='CouleurH'>$</span>";
}

echo "<td>";
echo "</tr>";


echo "<tr>";
echo "<td>De 18 à 64 ans :</td>";
echo "<td class= 'CouleurF'>$popFA ($pourcentFA)</td>";
echo "<td class= 'CouleurH'>$popHA ($pourcentHA)</td>";
echo "<td>$$$$$$$$$$$$$$$$$$$$</td>";
echo "</tr>";


echo "<tr>";
echo "<td>De plus de 64 ans :</td>";
echo "<td class= 'CouleurF'>$popF64 ($pourcentF64)</td>";
echo "<td class= 'CouleurH'>$popH64 ($pourcentH64)</td>";
echo "<td>$$$$$$$$$$$$$$$$$$$$</td>";
echo "</tr>";

echo "<tr id ='total'>";
echo "<td>Total :</td>";
echo "<td class= 'CouleurF'>$TotF ($pourcentTotF)</td>";
echo "<td class= 'CouleurH'>$TotH ($pourcentTotH)</td>";
echo "<td>$$$$$$$$$$$$$$$$$$$$</td>";
echo "</tr>";



?>



</table>
</body>
</html>


