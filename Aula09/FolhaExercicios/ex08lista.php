<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08 Lista</title>
</head>
<body>

    <h2>Opções de Parcelamento da Moto</h2>

    <?php
    $valorAVista = 8654.00;

    $taxasDeJuros = [
        24 => 0.015, // 1,5% para 24 vezes
        36 => 0.020, // 2,0% para 36 vezes
        48 => 0.025, // 2,5% para 48 vezes
        60 => 0.030  // 3,0% para 60 vezes
    ];

    foreach ($taxasDeJuros as $parcelas => $taxa) {
        $valorTotal = $valorAVista * (1 + ($taxa * $parcelas));
        $valorParcela = $valorTotal / $parcelas;

        echo "<p>Opção: $parcelas vezes</p>";
        echo "<p>Taxa de juros: " . ($taxa * 100) . "%</p>";
        echo "<p>Valor total a pagar: R$ " . number_format($valorTotal, 2, ',', '.') . "</p>";
        echo "<p>Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "</p><br>";
    }
    ?>

</body>
</html>
