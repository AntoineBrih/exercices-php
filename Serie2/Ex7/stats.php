<!DOCTYPE html>
<html>
<head>


<?php
if(isset ($_POST ['popF18']) && isset ($_POST ['popH18']) && isset ($_POST ['popFA'])&& isset ($_POST ['popHA']) && isset ($_POST ['popF64']) && isset ($_POST ['popH64'])){
    $popF18 = $_POST ['popF18'];
    $popF18 = $_POST['popF18'];
    $popH18 = $_POST['popH18'];
    $popFA = $_POST['popFA'];
    $popHA = $_POST['popHA'];
    $popF64 = $_POST['popF64'];
    $popH64 = $_POST['popH64'];
    
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
    
    $nbFois18 = (int)(($popF18 / $Total18) * 20);
    $nbFoisA = (int)(($popFA / $TotalA) * 20);
    $nbFois64 = (int)(($popF64 / $Total64) * 20);
    $nbFoisTot = (int)(($TotF / $bigTotal) * 20);
    
    // number_format ($nombre, 2);
    $coulF = "blue";
    $coulH = "red";
    
}

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
<form  method="POST" action="stats.php"> <?php//action c'est là où on va envoyer les données, dans quel fichier ?>
Nombres femmes moins de 18 ans: <input type="number" name="popF18"><br>
Nombres hommes moins de 18 ans: <input type="number" name="popH18"><br>
Nombres femmes 18-64 ans: <input type="number" name="popFA"><br>
Nombres hommes 18-64 ans: <input type="number" name="popHA"><br>
Nombres femmes plus de 64 ans: <input type="number" name="popF64"><br>
Nombres hommes plus de 64 ans: <input type="number" name="popH64"><br>
<input type="submit">
<br>
<br>
</form>
<table id="pop">
<tr id='categorie'>
<th>Catégorie</th>
<th>Femmes</th>
<th>Hommes</th>
<th>Graphique</th>
</tr>



<?php
if(isset ($_POST ['popF18']) && isset ($_POST ['popH18']) && isset ($_POST ['popFA'])&& isset ($_POST ['popHA']) && isset ($_POST ['popF64']) && isset ($_POST ['popH64'])){
echo "<tr>";
echo "<td>De moins de 18 ans :</td>";
echo "<td class= 'CouleurF'>$popF18 (" .number_format($pourcent18F, 2) ."%)</td>";
echo "<td class= 'CouleurH'>$popH18 (" .number_format($pourcent18H, 2) ."%)</td>";

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
echo "<td class= 'CouleurF'>$popFA (" .number_format($pourcentFA, 2) ."%)</td>";
echo "<td class= 'CouleurH'>$popHA (" .number_format($pourcentHA, 2) ."%)</td>";
echo "<td>";
for($i=0; $i<$nbFoisA; $i++){
    echo "<span class ='CouleurF'>$</span>";
}

for($i=0; $i < 20-$nbFoisA; $i++){
    echo "<span class ='CouleurH'>$</span>";
}
echo "<td>";
//echo "<td></td>";
echo "</tr>";


echo "<tr>";
echo "<td>De plus de 64 ans :</td>";
echo "<td class= 'CouleurF'>$popF64 (" .number_format($pourcentF64, 2) ."%)</td>";
echo "<td class= 'CouleurH'>$popH64 (" .number_format($pourcentH64, 2) ."%)</td>";
echo "<td>";
for($i=0; $i<$nbFois64; $i++){
    echo "<span class ='CouleurF'>$</span>";
}

for($i=0; $i < 20-$nbFois64; $i++){
    echo "<span class ='CouleurH'>$</span>";
}
echo "</td>";
echo "</tr>";

echo "<tr id ='total'>";
echo "<td>Total :</td>";
echo "<td class= 'CouleurF'>$TotF (" .number_format($pourcentTotF, 2) ."%)</td>";
echo "<td class= 'CouleurH'>$TotH (" .number_format($pourcentTotH, 2) ."%)</td>";
echo "<td>";
for($i=0; $i<$nbFoisTot; $i++){
    echo "<span class ='CouleurF'>$</span>";
}

for($i=0; $i < 20-$nbFoisTot; $i++){
    echo "<span class ='CouleurH'>$</span>";
}
echo "</td>";
echo "</tr>";

}

?>



</table>
</body>
</html>


