<?php
session_start();
session_destroy();

// Remove os cookies
setcookie('usuario', '', time() - 3600, "/");
setcookie('inicio_sessao', '', time() - 3600, "/");

// Redireciona para a página de login
header('Location: login.html');
exit;
