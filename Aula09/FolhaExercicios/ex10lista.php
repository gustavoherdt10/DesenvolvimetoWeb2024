<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 10 Lista</title>
</head>
<body>
    <h1>Apresentação Arvore</h1>
<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados2", "engSoft 2")
    )
);

function exibirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        if (is_array($valor)) {
            echo str_repeat("---", $nivel) . $chave . "<br>";
            exibirArvore($valor, $nivel + 1);
        } else {
            echo str_repeat("---", $nivel) . $valor . "<br>";
        }
    }
}

exibirArvore($pastas);
?>
</body>
</html>