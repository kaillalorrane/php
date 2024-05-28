<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php

    $notas= [
        ["nome" => "José", "nota" => 8],
        ["nome" => "Maria", "nota" => 2],
        ["nome" => "Julio", "nota" => 4],
        ["nome" => "Julia", "nota" => 9],
        ["nome" => "Barbara", "nota" => 5]
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
</body>
</html>