<style>
p {
    background-color: #ffcbd7;
}
</style>



<?php
$aluno = array( "nome" => "Fabio S", 
"idade" => 30, 
"end" => "rua x", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-20");

echo "<p> Aluno 1: <br> </p>";
foreach($aluno as $chave => $valor){
echo " $valor" . "<br> ";
}


$aluno1 = array( "nome" => "Kailla", 
"idade" => 17, 
"end" => "rua z", 
"cidade"=> "Licinio",
"estado"=> "BA", 
"cpf"=> "000.000.000-10");

echo "<p> Aluno 2: <br> </p>" ;
foreach($aluno1 as $chave => $valor){
    echo " $valor" . "<br> ";
    }
echo "<br>";


$aluno2 = array( "nome" => "Sarah", 
"idade" => 18, 
"end" => "rua b", 
"cidade"=> "Tanque Novo",
"estado"=> "BA", 
"cpf"=> "000.000.000-22");

echo "<p> Aluno 3: <br> </p>";
foreach($aluno2 as $chave => $valor){
    echo " $valor" . "<br> ";
    }

?>