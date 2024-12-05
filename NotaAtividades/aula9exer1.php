<?php
$notas = [8, 7.5, 6, 9];

$faltas = [1, 1, 0, 1, 1, 1, 0, 1, 1, 1];

function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}

function verificarAprovacaoNota($media) {
    return $media >= 7 ? "Aprovado por Nota" : "Reprovado por Nota";
}

function calcularFrequencia($faltas) {
    $totalDias = count($faltas);
    $diasPresente = array_sum($faltas);
    return ($diasPresente / $totalDias) * 100;
}

function verificarAprovacaoFrequencia($frequencia) {
    return $frequencia >= 70 ? "Aprovado por Frequência" : "Reprovado por Frequência";
}

$media = calcularMedia($notas);
$statusNota = verificarAprovacaoNota($media);

$frequencia = calcularFrequencia($faltas);
$statusFrequencia = verificarAprovacaoFrequencia($frequencia);

echo "Média das Notas: " . number_format($media, 2) . "<br>";
echo "Status por Nota: $statusNota<br>";
echo "Frequência: " . number_format($frequencia, 2) . "%<br>";
echo "Status por Frequência: $statusFrequencia<br>";
?>
