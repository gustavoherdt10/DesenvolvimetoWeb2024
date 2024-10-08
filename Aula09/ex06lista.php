<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06 Lista</title>
    <style>
        .vermelho {
            color: red;
        }
        .azul {
            color: blue;
        }
        .verde {
            color: green;
        }
    </style>
</head>
<body>

    <h2>Compras de Joãozinho</h2>
    <form method="POST" action="">
        <label for="macas">Quantidade de maçãs (kg):</label>
        <input type="number" id="macas" name="macas" required step="0.01"><br><br>

        <label for="melancias">Quantidade de melancias (kg):</label>
        <input type="number" id="melancias" name="melancias" required step="0.01"><br><br>

        <label for="laranjas">Quantidade de laranjas (kg):</label>
        <input type="number" id="laranjas" name="laranjas" required step="0.01"><br><br>

        <label for="repolhos">Quantidade de repolho (kg):</label>
        <input type="number" id="repolhos" name="repolhos" required step="0.01"><br><br>

        <label for="cenouras">Quantidade de cenouras (kg):</label>
        <input type="number" id="cenouras" name="cenouras" required step="0.01"><br><br>

        <label for="batatinhas">Quantidade de batatinhas (kg):</label>
        <input type="number" id="batatinhas" name="batatinhas" required step="0.01"><br><br>

        <input type="submit" value="Calcular Total">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Preços por kg
    $precos = [
        'macas' => 3.00, // R$ 3,00 por kg
        'melancias' => 2.50, // R$ 2,50 por kg
        'laranjas' => 4.00, // R$ 4,00 por kg
        'repolhos' => 1.50, // R$ 1,50 por kg
        'cenouras' => 2.00, // R$ 2,00 por kg
        'batatinhas' => 3.50 // R$ 3,50 por kg
    ];

    $quantidades = [
        'macas' => $_POST['macas'],
        'melancias' => $_POST['melancias'],
        'laranjas' => $_POST['laranjas'],
        'repolhos' => $_POST['repolhos'],
        'cenouras' => $_POST['cenouras'],
        'batatinhas' => $_POST['batatinhas']
    ];

    $total = 0;
    foreach ($quantidades as $produto => $quantidade) {
        $total += $quantidade * $precos[$produto];
    }

    $dinheiroDisponivel = 50.00;

    echo "<p>O valor total da compra foi: R$ " . number_format($total, 2, ',', '.') . "</p>";

    if ($total < $dinheiroDisponivel) {
        $saldo = $dinheiroDisponivel - $total;
        echo "<p class='azul'>Joãozinho ainda pode gastar R$ " . number_format($saldo, 2, ',', '.') . ".</p>";
    } elseif ($total > $dinheiroDisponivel) {
        $excesso = $total - $dinheiroDisponivel;
        echo "<p class='vermelho'>Faltou R$ " . number_format($excesso, 2, ',', '.') . " para pagar a conta.</p>";
    } else {
        echo "<p class='verde'>O saldo para compras foi esgotado!</p>";
    }
}
?>

</body>
</html>
