<?php

require_once 'controller/comboController.php';
require_once 'connection/connection.php';

if (!is_null($_GET['tag'])) {
    $tag = $_GET['tag'];

    // $conn = new DbConnection;
    $combo = new ComboController;

    $combo->decrementItem($tag, $conn);
}

?>