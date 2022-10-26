<?php

require_once "service/comboService.php";

class ComboController {
    public function __construct() {
        $this->service = new ComboService;
    }

    public function decrementItem($tag, $conn) {
        $resposta = $this->service->decrementSingleItem($tag, $conn);

        return $resposta;
    }
}

?>