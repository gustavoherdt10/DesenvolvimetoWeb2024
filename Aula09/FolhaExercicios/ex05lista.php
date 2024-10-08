<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 Lista</title>
</head>
<body>

    <h2>Calcule a área de um triângulo retângulo</h2>
    <form method="POST" action="">
        <label for="base">Comprimento da base (em metros):</label>
        <input type="number" id="base" name="base" required><br><br>

        <label for="altura">Altura (em metros):</label>
        <input type="number" id="altura" name="altura" required><br><br>

        <input type="submit" value="Calcular Área">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = ($base * $altura) / 2;

    echo "<p>Fórmula -> $area = ($base * $altura) / 2</p>";
}
?>

</body>
</html>
