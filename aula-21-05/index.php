<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Exemplo 1</h2>
    <pre>
    <?php
    $array = ['alunos'=>[ [ 'id'=> 4,'nome'=> 'Kate', 'cep'=> 334569, 'idade'=> 26, 'endereco'=> 'Mayfair', 'cidade'=> 'Londres', 'país'=> 'Inglaterra'], 
                         ['id'=> 6,'nome'=> 'Penelope', 'cep'=> 6785748, 'idade'=> 22, 'endereco'=> 'Street Flower', 'cidade'=> 'Liverpool', 'país'=> 'Inglaterra'], 
                         ['id'=> 8,'nome'=> 'Daphne', 'cep'=> 1543857, 'idade'=>18, 'endereco'=> 'Street Belle', 'cidade'=> 'Windsor', 'país'=> 'Inglaterra']
    ]
];
print_r($array);
echo "<br>";
echo "O aluno na posição 1 é ";
print_r($array['alunos'][1]['nome']);

echo "<br> Idade: ";
print_r($array ['alunos'][1]['idade']);

echo "<br> Endereço:";
print_r($array ['alunos'][1]['endereco']);
 


   ?>

    <table id="alunos">
            <tr>
              <th>Id</th>
              <th >Nome</th>
              <th>Cep</th>
              <th>Idade</th>
              <th>Endereço</th>
              <th>Cidade</th>
              <th>País</th>
            </tr>
            <tr>
              <td><?php print_r($array['alunos'][0]['id'])?></td>
              <td><?php print_r($array['alunos'][0]['nome'])?></td>
              <td><?php print_r($array['alunos'][0]['cep'])?></td>
              <td><?php print_r($array['alunos'][0]['idade'])?></td>
              <td><?php print_r($array['alunos'][0]['endereco'])?></td>
              <td><?php print_r($array['alunos'][0]['cidade'])?></td>
              <td><?php print_r($array['alunos'][0]['país'])?></td>
              </tr>

              <tr>
              <td><?php print_r($array['alunos'][1]['id'])?></td>
              <td><?php print_r($array['alunos'][1]['nome'])?></td>
              <td><?php print_r($array['alunos'][1]['cep'])?></td>
              <td><?php print_r($array['alunos'][1]['idade'])?></td>
              <td><?php print_r($array['alunos'][1]['endereco'])?></td>
              <td><?php print_r($array['alunos'][1]['cidade'])?></td>
              <td><?php print_r($array['alunos'][1]['país'])?></td>
              </tr>

              <tr>
              <td><?php print_r($array['alunos'][2]['id'])?></td>
              <td><?php print_r($array['alunos'][2]['nome'])?></td>
              <td><?php print_r($array['alunos'][2]['cep'])?></td>
              <td><?php print_r($array['alunos'][2]['idade'])?></td>
              <td><?php print_r($array['alunos'][2]['endereco'])?></td>
              <td><?php print_r($array['alunos'][2]['cidade'])?></td>
              <td><?php print_r($array['alunos'][2]['país'])?></td>
              </tr>
</table>
</pre>

<pre> 
              <table id="alunos">
  
              <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Cep</th>
    <th>Idade</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>País</th>
  </tr>
  <?php for ($a = 0; $a < count($array['alunos']); $a++) { ?>
  <tr>
    <td><?php print_r($array['alunos'][$a]['id'])?></td>
    <td><?php print_r($array['alunos'][$a]['nome'])?></td>
    <td><?php print_r($array['alunos'][$a]['cep'])?></td>
    <td><?php print_r($array['alunos'][$a]['idade'])?></td>
    <td><?php print_r($array['alunos'][$a]['endereco'])?></td>
    <td><?php print_r($array['alunos'][$a]['cidade'])?></td>
    <td><?php print_r($array['alunos'][$a]['país'])?></td>
  </tr>
  <?php } ?>
</table>
  </pre>

  <table id="alunos">
    <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Cep</th>
    <th>Idade</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>País</th>
    </tr>
    <?php

$keys = [
    array_keys($array['alunos'][0]),
    array_keys($array['alunos'][1]),
    array_keys($array['alunos'][2]),
  ];
  
  for($i = 0; $i < count($keys); $i++) {
      for($j = 0; $j < count($keys[$i]); $j++){
          echo "<td>";
          print ($array['alunos'][$i][$keys[$i][$j]]);
          echo "</td>";
      }
      echo "</tr>";
    }
    ?>
</table>

<pre> 
    <?php

    $notas= [
        ["nome" => "Colin", "nota" => 2],
        ["nome" => "Eloise", "nota" => 6],
        ["nome" => "Francesca", "nota" => 7],
        ["nome" => "Hyacinth", "nota" => 8],
        ["nome" => "Anthony", "nota" => 9]
    ];

    $aprovados = [];
    $reprovados = [];
    $na_final = [];

    foreach ($notas as $aluno) {
        if ($aluno["nota"] > 7) {
            $aprovados[] = $aluno["nome"];
        } elseif ($aluno["nota"] < 3) {
            $reprovados[] = $aluno["nome"];
        } else {
            $na_final[] = $aluno["nome"];
        }
    }

    echo "Alunos aprovados:<br>";
    foreach ($aprovados as $aprovado) {
        foreach ($notas as $aluno) {
            if ($aluno["nome"] == $aprovado) {
                echo $aluno["nome"] . " - Nota: " . $aluno["nota"] . "<br>";
            }
        }
    }

    echo "<br>Alunos reprovados:<br>";
    foreach ($reprovados as $reprovado) {
        foreach ($notas as $aluno) {
            if ($aluno["nome"] == $reprovado) {
                echo $aluno["nome"] . " - Nota: " . $aluno["nota"] . "<br>";
            }
        }
    }

    echo "<br>Alunos na final:<br>";
    foreach ($na_final as $aluno_final) {
        foreach ($notas as $aluno) {
            if ($aluno["nome"] == $aluno_final) {
                echo $aluno["nome"] . " - Nota: " . $aluno["nota"] . "<br>";
            }
        }
    }

    ?>

  </pre>

</body>
</html>