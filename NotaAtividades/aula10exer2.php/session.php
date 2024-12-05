<?php
session_start();

function exibirAlertaELogout($mensagem) {
    echo "<script>
        alert('$mensagem');
        window.location.href = 'login.html';
    </script>";
    exit;
}

if (!isset($_SESSION['login']) || !isset($_SESSION['inicio_sessao']) || 
    !isset($_COOKIE['usuario']) || !isset($_COOKIE['inicio_sessao'])) {
    exibirAlertaELogout("Os dados da sessão foram perdidos. Por favor, faça login novamente.");
}

$_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');

$inicio = strtotime($_SESSION['inicio_sessao']);
$ultima = strtotime($_SESSION['ultima_requisicao']);
$tempo_sessao = $ultima - $inicio;

$tempo_formatado = gmdate("i:s", $tempo_sessao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
</head>
<body>
    <h1>Informações da Sessão</h1>
    <p><strong>Login:</strong> <?= $_SESSION['login'] ?></p>
    <p><strong>Senha:</strong> <?= $_SESSION['senha'] ?></p>
    <p><strong>Data/Hora de Início da Sessão:</strong> <?= $_SESSION['inicio_sessao'] ?></p>
    <p><strong>Data/Hora da Última Requisição:</strong> <?= $_SESSION['ultima_requisicao'] ?></p>
    <p><strong>Tempo Total da Sessão:</strong> <?= $tempo_formatado ?> minutos</p>

    <h2>Dados do Cookie</h2>
    <p><strong>Usuário (Cookie):</strong> <?= $_COOKIE['usuario'] ?></p>
    <p><strong>Data/Hora de Início (Cookie):</strong> <?= $_COOKIE['inicio_sessao'] ?></p>

    <a href="logout.php">Encerrar Sessão</a>
</body>
</html>
