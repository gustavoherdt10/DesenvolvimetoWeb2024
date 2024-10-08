<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 Lista</title>
</head>
<body>

    <h2>Cálculo de Juros do Financiamento do Carro</h2>

    <?php
    $valorAVista = 22500.00;
    $numeroParcelas = 60;
    $valorParcela = 489.65;

    $valorTotalFinanciado = $numeroParcelas * $valorParcela;

    $jurosPagos = $valorTotalFinanciado - $valorAVista;

    echo "<p>Valor à vista do carro: R$ " . number_format($valorAVista, 2, ',', '.') . "</p>";
    echo "<p>Valor total do financiamento: R$ " . number_format($valorTotalFinanciado, 2, ',', '.') . "</p>";
    echo "<p>Valor total de juros pagos: R$ " . number_format($jurosPagos, 2, ',', '.') . "</p>";
    ?>

</body>
</html>
