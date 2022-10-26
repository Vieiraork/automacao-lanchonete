<?php

require_once 'connection/connection.php';

class Usuario {


    public function login() {

    }
    
    public function logout() {
    
    }
    
    public function create($conn, $usuario) {
        $query = "INSERT INTO usuario (no_usuario, senha, dt_registro) 
        VALUES ('$usuario->getNoUsuario()', '$usuario->getSenha()', '$usuario->getDtRegistro()')";
    }
    
    public function edit($id, $usuario) {
        $query = "UPDATE usuario SET no_usuario = '$usuario->getNoUsuario()', 
        senha = '$usuario->getSenha()', dt_alteracao = '$usuario->getDtAlteracao()' 
        WHERE id_usuario = '$usuario->getIdUsuario()'";
    }
    
    public function destroy($id) {
        $query = "DELETE usuario WHERE id_usuario = '$id'";
    }

    public function perfil($id) {
        $query = "SELECT no_usuario, dt_registro, dt_alteracao FROM usuario WHERE id_usuario = '$id'";

    }
}

?>