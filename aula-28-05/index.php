<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Constante</h2>
    <pre> 
    <?php
    define("PI", 3.14);
    echo PI;
?>
</pre>

<h2>Constantes pré-definidas</h2>
<pre> 
<?php
 function funcConsts() {
 echo "ARQUIVO: ".__FILE__."<br>";
 echo "DIRETÓRIO: ".__DIR__."<br>";
 echo "LINHA: ".__LINE__."<br>";
 echo "FUNÇÃO: ".__FUNCTION__."<br>";
}
 funcConsts();
?>
</pre>

<h2>Variáveis SuperGlobais</h2>
<pre>
<?php
 $vars_pre = get_defined_vars();
 print_r($vars_pre);
?> 
</pre>

<h2>Globals</h2>
<pre>
 
   <?php
   $cor = "azul";
   
   function test_global() {
       echo $GLOBALS["cor"];
   }
   
   test_global(); 
   ?>
</pre>

    <h2> COOKIE</h2>
    <pre>
    <?php
    print_r($_COOKIE);
    ?>
    </pre>
    <h2>FILES</h2>
    <pre>
    <?php
    print_r($_FILES);
    ?>
    </pre>
    <h2>ENV</h2>
    <pre>
    <?php
    print_r($_ENV);
    ?>
    </pre>
    <h2>REQUEST</h2>
    <pre>
    <?php
    print_r($_REQUEST);
    ?>
    </pre>

<h2>Função</h2>
<pre> 
    <?php
 function funcao($var_1 = 2, $var_2 = 6) {
 echo "Código da Função <br>";
 return "Dado de Retorno: ".$var_1."/".$var_2;
 }
 $retorno = funcao();
 echo $retorno."<br><br>";
 $retorno = funcao(23, "Penelope Featherington");
 echo $retorno."<br><br>";
?> 
</pre>

<h2>Função soma sem parametro</h2>
<pre>
    <?php
    function soma ( ){
        $val1= 20;
        $val2= 25;
        $soma= $val1 + $val2;
        echo "Soma: $soma"; 
    }
    soma();
    ?>

</pre>

<h2>Função soma com parametro </h2>
<pre>
    <?php
    function so ( $val1, $val2 ){
        $soma= $val1 + $val2;
        echo "Soma: $soma"; 
    }

print_r(so(6, 12));
echo "<br>";
print_r(so(8, 2));
    ?>

</pre>

<h2>Função soma com parametro </h2>
<pre>
    <?php
    function somu ( $val1, $val2, $val3){
        $soma= $val1 + $val2;
        $multiplica = $soma * $val3;
        echo "Resultado: $multiplica"; 
    }

print_r(somu(2,5,8 ));
echo "<br>";
print_r(somu(5,8, 8 ));
    ?>
    </pre>

    <h2>Função exemplo</h2>
    <pre>
        <?php
            function exemplo ($val1, $val2){
                $soma= $val1 + $val2;
                $mul= $soma * $val1;
                $sub= $mul - $val2;
                $div= $sub/ $val1;

                return ($div);
            }
            echo(exemplo(2,4));
            echo "<br>";

            echo(exemplo(4,8));
            echo "<br>";

        ?>
    </pre>

    <h2>Função ao quadrado</h2>
    <pre>
        <?php
            function e1 ($val1){
                $eleva= $val1 * $val1;
                return ($eleva);
            }
            for ($i=0;$i<=1000; $i++){
            echo(e1($i));
            echo "<br>";
        }
        ?>
    </pre>

    <pre>
        <?php
            function e2 ($val1){
                $eleva= $val1 * $val1;

                return ($eleva);
            }
            echo(e2(soma(5, 5)));
            echo "<br>";
        ?>
    </pre>

</body>
</html>