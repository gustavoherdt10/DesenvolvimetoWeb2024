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
echo "Valor Salário 1: $SALARIO1 e Valor Salário 2: $SALARIO2<br>";

// Condições para comparar os valores
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2.";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2.";
} else {
    echo "Os valores são iguais.";
}
?>
