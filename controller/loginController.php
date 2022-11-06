<?php
require_once '../service/UsuarioService.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

if (is_null($email) || is_null($senha)) {
    header('Location: index.php');
}

$usuario = new UsuarioService;
$usuario->login($email, $senha);

?>