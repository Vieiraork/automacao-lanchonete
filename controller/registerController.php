<?php
require_once "../service/UsuarioService.php";
require_once "../dto/userDto.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if (is_null($nome) || is_null($email) || is_null($senha)) {
    header('Location: ../index.php');
}

$dto = new UserDto;
$dto->setNoUsuario($nome);
$dto->setEmail($email);
$dto->setSenha(password_hash($senha, PASSWORD_BCRYPT));
$dto->setDtRegistro(date("d/m/Y"));

$usuario = new UsuarioService;
$usuario->create($dto);

?>