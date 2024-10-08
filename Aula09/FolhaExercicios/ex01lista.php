<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 Lista</title>
    <style>
        .azul {
            color: blue;
        }
        .verde {
            color: green;
        }
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>

    <h2>Insira os valores:</h2>
    <form method="POST" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required><br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required><br><br>

        <label for="valor3">Valor 3:</label>
        <input type="number" id="valor3" name="valor3" required><br><br>

        <input type="submit" value="Calcular Soma">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    $soma = $valor1 + $valor2 + $valor3;

    if ($valor1 > 10) {
        echo "<p class='azul'>O resultado da soma é: $soma</p>";
    }

    if ($valor2 < $valor3) {
        echo "<p class='verde'>O resultado da soma é: $soma</p>";
    }

    if ($valor3 < $valor1 && $valor3 < $valor2) {
        echo "<p class='vermelho'>O resultado da soma é: $soma</p>";
    }
}
?>

</body>
</html>