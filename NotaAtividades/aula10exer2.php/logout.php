<?php
session_start();
session_destroy();

setcookie('usuario', '', time() - 3600, "/");
setcookie('inicio_sessao', '', time() - 3600, "/");

header('Location: login.html');
exit;
