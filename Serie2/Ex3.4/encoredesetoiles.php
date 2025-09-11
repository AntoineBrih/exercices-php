<!doctype html>
 <?php

$nb = 6924;
$nblignes = strlen ($nb);

for($i = 0; $i < $nblignes; $i++){
  

    for($i2 = 0; $i2<substr($nb, $i, 1); $i2++){
      
        echo'*';
    }
  echo "<br>";
}
?>
