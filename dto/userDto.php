<?php

class UserDto {
    private $id_usuario;
    private $no_usuario;
    private $senha;
    private $dt_registro;
    private $dt_alteracao;

    public function getIdUsuario() {
        return $id_usuario;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getNoUsuario() {
        return $id_usuario;
    }

    public function setNoUsuario($no_usuario) {
        $this->no_usuario = $no_usuario;
    }

    public function getSenha() {
        return $senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getDtRegistro() {
        return $dt_registro;
    }

    public function setDtRegistro($dt_registro) {
        $this->dt_registro = $dt_registro;
    }

    public function getDtAlteracao() {
        return $dt_alteracao;
    }

    public function setDtAlteracao($dt_alteracao) {
        $this->dt_alteracao = $dt_alteracao;
    }
}

?>