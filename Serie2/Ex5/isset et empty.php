<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo"Premier cas ";
    echo"<br>";

    echo"isset vaut :";
    echo isset ($x);
    echo"<br>";

    echo"empty vaut :";
    echo empty ($x);

    echo"<br>--------------------------------------------------<br>";
    echo $x=0;
    echo"<br>";
    echo"Deuxieme cas ";
    echo"<br>";

    echo"isset vaut :";
    echo isset ($x);
    echo"<br>";

    echo"empty vaut :";
    echo empty ($x);


    echo"<br>--------------------------------------------------<br>";

    echo $x=0.0;
    echo"<br>";
     echo"Troisieme cas ";
     echo"<br>";
 
     echo"isset vaut :";
     echo isset ($x);
     echo"<br>";
 
     echo"empty vaut :";
     echo empty ($x);
 
 
    echo"<br>--------------------------------------------------<br>";
    echo $x=7;
    echo"<br>";
      echo"Quatrieme cas ";
      echo"<br>";
  
      echo"isset vaut :";
      echo isset ($x);
      echo"<br>";
  
      echo"empty vaut :";
      echo empty ($x);
  
  
     echo"<br>--------------------------------------------------<br>";
     echo $x=24.7;
     echo"<br>";
     echo"Cinquieme ";
     echo"<br>";
 
     echo"isset vaut :";
     echo isset ($x);
     echo"<br>";
 
     echo"empty vaut :";
     echo empty ($x);
 
 
    echo"<br>--------------------------------------------------<br>";
    echo $x=true;
    echo"<br>";
    echo"Sixieme cas ";
    echo"<br>";

    echo"isset vaut :";
    echo isset ($x);
    echo"<br>";

    echo"empty vaut :";
    echo empty ($x);


     echo"<br>--------------------------------------------------<br>";
     echo $x=false;
     echo"<br>";
     echo"Septieme cas";
     echo"<br>";
 
     echo"isset vaut :";
     echo isset ($x);
     echo"<br>";
 
     echo"empty vaut :";
     echo empty ($x);
 
 
      echo"<br>--------------------------------------------------<br>";
      echo $x="";
      echo"<br>";
      echo"Huitieme cas ";
      echo"<br>";
  
      echo"isset vaut :";
      echo isset ($x);
      echo"<br>";
  
      echo"empty vaut :";
      echo empty ($x);
  
  
       echo"<br>--------------------------------------------------<br>";
       echo $x="\n";
       echo"<br>";
       echo"Neuvieme cas";
       echo"<br>";
   
       echo"isset vaut :";
       echo isset ($x);
       echo"<br>";
   
       echo"empty vaut :";
       echo empty ($x);
   
   
        echo"<br>--------------------------------------------------<br>";
        echo $x="Hello";
        echo"<br>";
        echo"Dixieme cas ";
        echo"<br>";
    
        echo"isset vaut :";
        echo isset ($x);
        echo"<br>";
    
        echo"empty vaut :";
        echo empty ($x);
    
    
         echo"<br>--------------------------------------------------<br>";
         echo $x=null;
         echo"<br>";
          echo"<br>";
         echo"Onzieme cas";
         echo"<br>";
     
         echo"isset vaut :";
         echo isset ($x);
         echo"<br>";
     
         echo"empty vaut :";
         echo empty ($x);
     
     
          echo"<br>--------------------------------------------------<br>";
          $x=array();
          echo"<br>";
          echo"Douzieme cas ";
          echo"<br>";
      
          echo"isset vaut :";
          echo isset ($x);
          echo"<br>";
      
          echo"empty vaut :";
          echo empty ($x);
      
      
           echo"<br>--------------------------------------------------<br>";
      
  

     
    ?>
    
</body>
</html>