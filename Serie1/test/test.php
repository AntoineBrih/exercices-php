<!doctype html>
 <html>
    
 <head>
    <style>
        div{
            width: 800px;
            margin-right: auto;
            margin-left: auto;
            background-color: black;
        }
        body{
            background-color: olive;
             
        }

        p{
            background-color :lightgreen;
        }

        #p1{
            color : yellow;
        }

        #p2{
            border : 6px dashed yellow;
        }
        </style>
 </head>
 <body>
    <div>
 <h1 id= 'p1' >Bienvenue !</h1> <p id = 'p2'>Il est actuellement
 <?php
 $heure = date('H:i');
 $img = "<img src = ../test/image/elephantA.img>";
 echo $heure;
 
 ?>
    et 
    tout va très bien.</p>
 <p> C’est
 <?php
 $jour = date('j');
 if ($jour < 15){
 echo 'le début';
}
 else{
    echo 'la fin';
 }
?>
 du mois.</p>

    <?php
     echo $img;
     $texte ="<p>
     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vulputate metus aliquet nisl volutpat, non lacinia lorem facilisis. Donec iaculis, ipsum quis tristique fringilla, orci est pellentesque erat, nec efficitur arcu urna ut enim. Quisque imperdiet porta leo eu scelerisque. Praesent eget hendrerit sem. In hac habitasse platea dictumst. Morbi tempor sem vel ex egestas consectetur. Fusce congue elit et metus pellentesque ultrices. Pellentesque id lectus a lorem faucibus venenatis. Morbi vitae arcu et eros lacinia condimentum. Vestibulum a aliquam tortor. In tincidunt sem eget lobortis egestas. Fusce eu tristique est, et condimentum risus. Vivamus vel sem cursus, vulputate erat et, commodo nulla. Nam eleifend enim ut enim aliquet efficitur. Donec elementum convallis tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
 
 Nulla efficitur volutpat risus, et fringilla nulla volutpat vel. In ac arcu justo. Proin non tempus urna. Nunc euismod ut est at blandit. Praesent malesuada tortor id sollicitudin consequat. In tristique vehicula placerat. Sed vel efficitur enim. Cras vel odio vitae leo feugiat vestibulum vel sit amet leo. Quisque gravida auctor elementum. Quisque vitae aliquet lectus. Duis efficitur leo at quam dignissim, et congue enim euismod.
 
 Donec quis finibus ipsum, non placerat enim. Duis mi ligula, cursus vel urna sed, suscipit porta sem. In scelerisque quam vitae consectetur euismod. Mauris efficitur congue quam, ac aliquet massa gravida id. Proin maximus malesuada risus, nec finibus mi pellentesque sed. Nam turpis elit, varius ac enim id, finibus lobortis orci. Nulla ullamcorper lorem eget velit pellentesque mollis. Morbi eu accumsan purus. Donec sit amet nulla placerat urna pretium malesuada eget nec arcu.
 
 Donec gravida porttitor viverra. Curabitur in arcu ut ligula vehicula varius vitae ac neque. Nunc placerat finibus augue non finibus. Duis quis faucibus lorem. Fusce at luctus tortor, eget molestie sem. Sed leo erat, suscipit et dictum id, convallis laoreet ligula. Donec finibus lacus id risus cursus fringilla. Donec a placerat justo. Nulla fringilla id mauris at sollicitudin. Phasellus blandit libero sit amet ullamcorper porta. Nunc tempor, urna eget pellentesque efficitur, mi velit iaculis est, in vulputate justo lacus sit amet enim. Cras non lorem eu est maximus laoreet et in erat. Morbi in porta lectus.
 
 Etiam in orci ullamcorper, eleifend dolor at, varius lorem. Vivamus a lacus sed sapien varius dictum. Vestibulum nunc nisl, dapibus a eros non, ultricies porttitor mauris. Etiam diam urna, pellentesque at fermentum ac, scelerisque et nisl. Donec ac diam maximus, pellentesque purus non, pellentesque felis. Quisque ut purus a felis efficitur bibendum. Mauris sapien nulla, iaculis eleifend erat in, tempor eleifend nunc. Nulla pretium ornare orci, in varius quam interdum eu. Maecenas at tortor orci. Pellentesque lobortis tristique libero ac dignissim.
         <p>";
             echo $texte
    ?>
   </div>
   </body>
 </html>