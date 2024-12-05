<?php
$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2++;

$SALARIO1 += $SALARIO1 * 0.10;

echo "Valor Salário 1 inicial: $SALARIO1 e Valor Salário 2 inicial: $SALARIO2<br>";


for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++; 

    if ($i == 50) {
        echo "Interrompendo na iteração $i<br>";
        break;
    }
}

if ($SALARIO1 < $SALARIO2) {
    echo "Valor final de SALARIO1: $SALARIO1 (é menor que SALARIO2)";
} else {
    echo "Valor final de SALARIO1: $SALARIO1";
}
?>
