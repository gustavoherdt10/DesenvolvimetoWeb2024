<?php
// Declarar as variáveis SALARIO1 e SALARIO2
$SALARIO1 = 1000; // Atribuir 1000 para SALARIO1
$SALARIO2 = 2000; // Atribuir 2000 para SALARIO2

// Atribuir o valor de SALARIO1 para SALARIO2
$SALARIO2 = $SALARIO1;

// Incrementar 1 na variável SALARIO2
$SALARIO2++;

// Adicionar 10% de aumento para SALARIO1
$SALARIO1 += $SALARIO1 * 0.10;

// Produzir a saída inicial
echo "Valor Salário 1 inicial: $SALARIO1 e Valor Salário 2 inicial: $SALARIO2<br>";

// Criar o laço de repetição para 100 iterações
for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++; // Incrementar 1 na variável SALARIO1

    // Verificar se a iteração é 50 e parar o loop
    if ($i == 50) {
        echo "Interrompendo na iteração $i<br>";
        break;
    }
}

// Verificar e exibir o valor de SALARIO1 se for menor que SALARIO2
if ($SALARIO1 < $SALARIO2) {
    echo "Valor final de SALARIO1: $SALARIO1 (é menor que SALARIO2)";
} else {
    echo "Valor final de SALARIO1: $SALARIO1";
}
?>
