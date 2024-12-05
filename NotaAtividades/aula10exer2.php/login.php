<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $inicioSessao = date('Y-m-d H:i:s');

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['inicio_sessao'] = $inicioSessao;
    $_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');

    setcookie('usuario', $login, time() + (60 * 5), "/");
    setcookie('inicio_sessao', $inicioSessao, time() + (60 * 5), "/");

    header('Location: session.php');
    exit;
}
