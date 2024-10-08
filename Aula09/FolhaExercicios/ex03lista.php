<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 Lista</title>
</head>
<body>

    <h2>Calcule a área de um quadrado</h2>
    <form method="POST" action="">
        <label for="lado">Comprimento do lado do quadrado (em metros):</label>
        <input type="number" id="lado" name="lado" required><br><br>

        <input type="submit" value="Calcular Área">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lado = $_POST['lado'];

    $area = $lado * $lado;

    echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
}
?>

</body>
</html>
