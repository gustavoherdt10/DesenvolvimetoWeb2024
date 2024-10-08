<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09 Lista</title>
</head>
<body>

    <h2>Opções de Parcelamento da Moto com Juros Compostos</h2>

    <?php
    // Valor da moto à vista
    $valorAVista = 8654.00;

    // Taxas de juros para cada prazo (iniciando com 2% e aumentando 0,3% a cada nível)
    $taxasDeJuros = [
        24 => 0.02,  // 2,0% para 24 vezes
        36 => 0.023, // 2,3% para 36 vezes
        48 => 0.026, // 2,6% para 48 vezes
        60 => 0.029  // 2,9% para 60 vezes
    ];

    // Exibindo as opções de parcelamento
    foreach ($taxasDeJuros as $parcelas => $taxa) {
        // Fórmula de Juros Compostos: M = C * (1 + i)^t
        // C = valor à vista, i = taxa de juros, t = número de parcelas
        $valorTotal = $valorAVista * pow((1 + $taxa), $parcelas);
        $valorParcela = $valorTotal / $parcelas;

        echo "<p>Opção: $parcelas vezes</p>";
        echo "<p>Taxa de juros: " . ($taxa * 100) . "%</p>";
        echo "<p>Valor total a pagar: R$ " . number_format($valorTotal, 2, ',', '.') . "</p>";
        echo "<p>Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "</p><br>";
    }
    ?>

</body>
</html>
