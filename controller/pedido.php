<?php
namespace controller;

use model\Combo;

if (!is_null($tag)) {
    $tag = $_GET['tag'];
    $combo = new Combo();

    $combo->decrementSingleItem($tag);
} else {
    echo 'algo';
}



?>