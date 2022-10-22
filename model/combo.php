<?php
namespace model;

use connection\Connection;

class Combo {
    public function __construct() {
        $this->conn = new Connection();
    }

    public function index() {

    }

    public function create() {

    }

    public function edit() {

    }

    public function decrementSingleItem($tag) {
        $conn = $this->conn->stablishDBConnection();

        $query = 'SELECT qtd_itens FROM Lanchonete';
        $result = $conn->query($query);

        if (!is_null($result) || $result < 3) {
            // TODO - ADICIONAR FUNÇÃO DE AVISO POR API DO WHATS OU TELEGRAM
        } else {
            // TODO - ADICIONAR PROSSEGUIMENTO AO PEDIDO
        }
        
    }


}

?>
