<?php
session_start();

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Define a data/hora de início da sessão
    $inicioSessao = date('Y-m-d H:i:s');

    // Inicia a sessão e armazena os dados
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['inicio_sessao'] = $inicioSessao;
    $_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');

    // Define cookies com tempo de vida de 5 minutos
    setcookie('usuario', $login, time() + (60 * 5), "/");
    setcookie('inicio_sessao', $inicioSessao, time() + (60 * 5), "/");

    // Redireciona para a página de exibição de sessão
    header('Location: session.php');
    exit;
}
