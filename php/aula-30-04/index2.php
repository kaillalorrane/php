
    <style>
        p{
            background-color: lightblue;
        }
    </style>
   
<?php
 $var = array(1, 2, 3, 5);
  
 echo " <p> Exemplo 1:</p>";
 
 echo "$var[0]<br>";
 echo "$var[1] <br>";
 echo "$var[2] <br>";
 echo "$var[3] <br>";
 ?>


 <?php
 $var1 = array ( "Fabio" => 30, "Eber" => 40,"Wq" => 60);

 echo " <p> Exemplo 2:</p>";
echo "$var1[Fabio]<br>";
echo "$var1[Eber]<br>";
echo "$var1[Wq]<br>";
?>


<?php
$var2 = array(0 =>5, 6=> 8, 9=>15);
$var2[1]=20;
$var2[2]=3;
$var2[0]=4;

echo " <p> Exemplo 3:</p>";

echo "$var2[0]<br>";
echo "<br> $var2[1]<br>";
echo "<br> $var2[2]<br>";
echo "<br>$var2[6]<br>";
echo "$var2[9]<br>";
?> 

