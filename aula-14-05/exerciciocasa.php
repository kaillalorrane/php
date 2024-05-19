<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> Funções </h1>

<h2> Função array_key</h2>
    <pre>   
<?php
$array = array(
    0 => 100,
    "cor" => "vermelho",
    "tamanho" => "medio",
    "altura" => 150
);

// Retorna todas as chaves do array
$keys = array_keys($array);
print_r($keys);

// Obtém as chaves com o valor vermelho
$vermelho_keys = array_keys($array, "vermelho");
print_r($vermelho_keys);
?>

</pre>
<h2> Função array_values </h2>
<pre>
<?php
$array = array(
    "nome" => "Maria",
    "idade" => 30,
    "cidade" => "Guanambi"
);

// Retorna todos os valores do array
$values = array_values($array);
print_r($values);
?>
</pre>
<h2>Função array_search</h2>
<pre>

<?php
$genero = array("comedia", "romance", "terror");
$busca = "romance";

// Busca pelo valor($busca) e retorna sua chave ($resultado)
$resultado = array_search($busca, $genero);

if ($resultado == false) {
    echo "A string '$busca' não foi encontrada no array.";
} 
else {
    echo "A string '$busca' foi encontrada na chave $resultado.";
}
?>
</pre>

<h2>Função array_key_exists</h2>
<pre>

<?php
$array = array(
    "nome" => "Maria",
    "idade" => 30,
    "cidade" => "Guanambi"
);

// Verifica se a chave 'nome' existe
if (array_key_exists("nome", $array)) {
    echo "A chave 'nome' existe nesse array.\n";
} 
else {
    echo "A chave 'nome' não existe nesse array.\n";
}
?>
</pre>

<h2>Função in_array</h2>
<pre>
<?php
$frutas = array('maçã', 'banana', 'laranja', 'melão', 'uva');

// Verificar se a fruta 'morango' está no array
if (in_array('morango', $frutas)) {
    echo "A fruta 'morango' está no array!";
} else {
    echo "A fruta 'morango' não está no array!";
}
?>
</pre>

<h2>Função isset</h2>
<pre>
<?php
$nome = "Maria";

// Verifica se a variável está definida
if (isset($nome)) {
    echo "A variável 'nome' está definida!";
} else {
    echo "A variável 'nome' não está definida.";
}

?>
</pre>

<h2>Função unset</h2>
<pre>
<?php
$frutas = array('maçã', 'banana', 'laranja', 'melão');

// Exibir o array original
echo "Array original: ";
print_r($frutas);

// Remove o elemento 'banana' do array
unset($frutas[1]);

// Exibir o array após a remoção
echo "<br>Array após remoção: ";
print_r($frutas);
?>
</pre>

<h2>Função empty</h2>
<pre>
<?php
    $texto = "Hello World"; 
    
    // Verifica se a variável está vazia
    if (empty($texto)) {
        echo "A variável $texto está vazia.";
    } else {
        echo "A variável $texto não está vazia.";
    }
?>
</pre>

<h2>Função array_push</h2>
<pre>
<?php
$frutas = array();

// Adiciona elementos ao array
array_push($frutas, 'Manga');
array_push($frutas, 'Uva');
array_push($frutas, 'Limão');
array_push($frutas, 'Melancia');

print_r($frutas);

?>
</pre>

<h2>Função array_pop</h2>
<pre>
<?php
$cores = array("azul", "rosa", "lilás");

// Use array_pop para extrair um elemento do final do array
$lastElement = array_pop($cores);
echo "O último elemento é: " . $lastElement . "<br>";

echo "O array modificado é: <br>";
print_r($cores);
?>
</pre>

<h2>Função array_shift</h2>
<pre>
<?php
$array = array( 12, "dois", 3.14, true, false);

// Use array_shift() para remover o primeiro elemento do array
$firstElement = array_shift($array);
echo "O primeiro elemento é: " . $firstElement . "\n";
echo "O array modificado é: <br>";
print_r($array);
?>
</pre>

<h2>Função array_unshift</h2>
<pre>
<?php
$frutas = array("cereja", "abacaxi", "caju");
print_r($frutas);

// Adiciona um ou mais elementos no inicio do array
$resultado = array_unshift($frutas, "laranja");

echo "Array modificado: <br>";
print_r($frutas);
?>
</pre>

<h2>Função count</h2>
<pre>
<?php
$frutas = array('maçã', 'banana', 'laranja', 'melão', 'abacaxi', 'cereja');

// Conta o número de elementos no array
$qtd_frutas = count($frutas);

echo "Existem $qtd_frutas frutas no array.";
?>
</pre>

<h2>Função explode</h2>
<pre>
<?php
$string = "maçã,banana,laranja,uva";

// Divide a string em um array
$frutas = explode(",", $string);
echo "Array resultante: <br>";
print_r($frutas);
?>
</pre>

<h2>Função implode</h2>
<pre>
<?php
$frutas = array('maçã', 'banana', 'laranja', 'melão');

// Divide o array em uma string
$string_frutas = implode(', ', $frutas);

echo $string_frutas;
?>
</pre>

<h2>Função array_combine</h2>
<pre>
<?php

$keys = array('nome', 'idade', 'cidade');
$values = array('João', 25, 'São Paulo');

// Combina os arrays
$result = array_combine($keys, $values);
print_r($result);
?>
</pre>

<h2>Função array_diff</h2>
<pre>
<?php

$array1 = array('a', 'b', 'c', 'd', 'e');
$array2 = array('b', 'c', 'f', 'g');

//encontra a diferença entre os arrays 1 e 2 (elementos que tem no array1 e não tem no array2)
$resultado = array_diff($array1, $array2);

print_r($resultado);
?>
</pre>

<h2>Função array_intersect</h2>
<pre>
<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];

// encontra a intersecção entre os arrays 1 e 2 (elementos que tem no array1 e não tem no array2)
$intersect = array_intersect($array1, $array2);

print_r($intersect);
?>
</pre>
</body>
</html>