<?php
// Declarar array com notas
$notas = [8, 7.5, 6, 9];

// Declarar array com faltas (1 para presente, 0 para falta em cada dia)
$faltas = [1, 1, 0, 1, 1, 1, 0, 1, 1, 1]; // Exemplo: 10 dias de aula

// Função para calcular a média das notas
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}

// Função para verificar o status de aprovação por nota
function verificarAprovacaoNota($media) {
    return $media >= 7 ? "Aprovado por Nota" : "Reprovado por Nota";
}

// Função para calcular a frequência do aluno
function calcularFrequencia($faltas) {
    $totalDias = count($faltas);
    $diasPresente = array_sum($faltas);
    return ($diasPresente / $totalDias) * 100; // Retorna frequência em porcentagem
}

// Função para verificar o status de aprovação por frequência
function verificarAprovacaoFrequencia($frequencia) {
    return $frequencia >= 70 ? "Aprovado por Frequência" : "Reprovado por Frequência";
}

// Chamadas das funções
$media = calcularMedia($notas);
$statusNota = verificarAprovacaoNota($media);

$frequencia = calcularFrequencia($faltas);
$statusFrequencia = verificarAprovacaoFrequencia($frequencia);

// Exibir os resultados
echo "Média das Notas: " . number_format($media, 2) . "<br>";
echo "Status por Nota: $statusNota<br>";
echo "Frequência: " . number_format($frequencia, 2) . "%<br>";
echo "Status por Frequência: $statusFrequencia<br>";
?>
