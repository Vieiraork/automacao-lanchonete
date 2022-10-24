<?php

class Combo {
    function index() {

    }
    
    function create($combo) {
        
    }
    
    function edit($id, $combo) {
    
    }
    
    function destroy($id) {
    
    }
    
    function decrementSingleItem($tag, $conn) {
        if ($conn) {
            echo $tag;
        } else {
            echo "Não há conexão com o banco de dados";
        }
        
        // $conn = $this->conn->stablishDBConnection();
    
        // $query = 'SELECT qtd_itens FROM Lanchonete';
        // $result = $conn->query($query);
    
        // if (!is_null($result) || $result < 3) {
        //     // TODO - ADICIONAR FUNÇÃO DE AVISO POR API DO WHATS OU TELEGRAM
        // } else {
        //     // TODO - ADICIONAR PROSSEGUIMENTO AO PEDIDO
        // }
        
    }
}



?>
