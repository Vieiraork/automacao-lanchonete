<?php

class ComboService {
    function index() {
        $query = 'SELECT * FROM combos';
    }
    
    function create($combo) {
        $query = "INSERT INTO combos (id_combo, cd_combo, dt_criacao, qtd_combo) VALUES ('$combo->getIdCombo()','$combo->getCdCombo()','$combo->getDtCriacao()','$combo->getQtdCombo())";

    }
    
    function edit($id, $combo) {
        $query = "UPDATE combos SET cd_combo = '$combo->getCdCombo()', qtd_combo = '$combo->getQtdCombo()', dt_alteracao = '$combo->getDtAlteracao()'";
    }
    
    function destroy($id) {
        $query = "DELETE combos WHERE id_combo = '$id'";
    }
    
    function decrementSingleItem($tag, $conn) {
        $query = 'SELECT qtd_combo FROM combos WHERE cd_combo = '. $tag;
        $qtd = mysqli_query($conn, $query);
        
        $row = mysqli_fetch_array($qtd);
        $row = json_encode($row);
        $novo = json_decode($row);

        if ($novo->qtd_combo == 0) {
            return "Infelizmente o combo solicitado não possui mais itens";
        }

        $nova_qtd = ($novo->qtd_combo - 1);

        $query = "UPDATE combos SET qtd_combo = ". $nova_qtd ." WHERE cd_combo = ". $tag;
        if ($conn->query($query)) {
            return "Seu pedido foi recebido";
        } else {
            return "Sem itens para completar seu pedido, por favor, verifique outro produto";
        }
    }
}



?>
