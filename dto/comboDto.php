<?php

class ComboDto {
    private $id_combo;
    private $cd_combo;
    private $dt_criacao;
    private $dt_alteracao;
    private $qtd_combo;

    public function getIdCombo() {
        return $id_combo;
    }

    public function setIdCombo($id_combo) {
        $this->id_combo = $id_combo;
    }

    public function getCdCombo() {
        return $cd_combo;
    }

    public function setCdCombo($cd_combo) {
        $this->cd_combo = $cd_combo;
    }

    public function getDtCriacao() {
        return $dt_criacao;
    }

    public function setDtCriacao($dt_criacao) {
        $this->dt_criacao = $dt_criacao;
    }

    public function getDtAlteracao() {
        return $dt_alteracao;
    }

    public function setDtAlteracao($dt_alteracao) {
        $this->dt_alteracao = $dt_alteracao;
    }

    public function getQtdCombo() {
        return $qtd_combo;
    }

    public function setQtdCombo($qtd_combo) {
        $this->qtd_combo = $qtd_combo;
    }
}


?>