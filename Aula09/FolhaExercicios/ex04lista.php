<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área de um Retângulo</title>
</head>
<body>

    <h2>Calcule a área de um retângulo</h2>
    <form method="POST" action="">
        <label for="ladoA">Comprimento do lado A (em metros):</label>
        <input type="number" id="ladoA" name="ladoA" required><br><br>

        <label for="ladoB">Comprimento do lado B (em metros):</label>
        <input type="number" id="ladoB" name="ladoB" required><br><br>

        <input type="submit" value="Calcular Área">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ladoA = $_POST['ladoA'];
    $ladoB = $_POST['ladoB'];

    $area = $ladoA * $ladoB;

    if ($area > 10) {
        echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
    }
}
?>

</body>
</html>
