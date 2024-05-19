<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<h1> array_lacos </h1>
<h2> exemplo 01</h2>
<pre>  
<?php

$a1=array("antonio", "luis", "jose", "joao");

    echo " $a1[0]" . "<br>";
    echo " $a1[1]" . "<br>";
    echo " $a1[2]" . "<br>";
    echo " $a1[3]" . "<br>";

?>
</pre>

<h2> array com for</h2>

<pre> 
<?php

for($x=0; $x < 4; $x++){
    echo " Posição $x o valor é $a1[$x]" . "<br>";
 
}

?>
</pre>

<h2> array com foreach</h2>

<pre> 
<?php
foreach($a1 as $dado){
    echo "$dado" . "<br>";
    }
?>
</pre>
<h2> array explicito com chaves</h2>
<pre>
    <?php
    $a2=array("Maria"=> 25, "Joao"=> 44, "Jose"=> 12, "Neusa"=> 73);
   
    foreach($a2 as $dados){
        echo "$dados"."<br>";
    }
    ?>
</pre>
<h2> foreach com chave e valor</h2>
<pre>
<?php
  
  foreach($a2 as $chave => $valor){
    echo " $chave: $valor"."<br>";
}

?>
</pre>


<h2>print_r mostra o que tem armazenado</h2>
<pre>
<?php 
 print_r ($a2);
?>
</pre>
<h2>array multidimensional</h2>
<pre>
    <?php
    $alunos=array("Maria"=> array("endereco"=> array("Rua"=> "Chile 1046","bairro"=> "Rebouças", "cidade"=> "Guanambi")), 
                    "Joao"=>array("endereco"=>array ("Rua Iapó 234","bairro"=> "Prado Velho", "cidade"=> "Sao Paulo")),
                    "Zeca"=>array("endereco"=>array ("Rua Iapó 234","bairro"=> "Prado Velho", "cidade"=> "Rio de Janeiro")));
  print_r($alunos);
  print_r ($alunos ["Maria"]["endereco"]);
  echo "<br>";
  print_r ($alunos ["Joao"] ["endereco"]);
  echo "<br>";
  print_r ($alunos ["Zeca"] ["endereco"]);
  echo "<br>";
  

    ?>  
</pre>

<h2>impressão com foreach</h2>
<pre>
    <?php
foreach($alunos as $chave => $valor){
    echo  "<br>Nome: $chave <br>";
    foreach ($valor as $chave2 => $endereco) {
        echo "<br> -$chave2: <br>";
        foreach( $endereco as $chave3=> $dados){
            echo " $chave3: $dados <br>";
        }
    }
}
?>


</pre>

</body>
</html>





