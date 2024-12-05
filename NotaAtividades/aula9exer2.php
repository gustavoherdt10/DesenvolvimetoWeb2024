<?php
// Array representando a estrutura de pastas
$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

// Função recursiva para exibir a árvore
function exibirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        echo str_repeat("-", $nivel) . " ";
        if (is_array($valor)) {
            // Exibe a chave (como um título de nível)
            echo $chave . "<br>";
            // Chama a função recursivamente
            exibirArvore($valor, $nivel + 2);
        } else {
            // Exibe os itens finais (folhas da árvore)
            echo $valor . "<br>";
        }
    }
}

// Exibir a estrutura da árvore
exibirArvore($pastas);
?>
