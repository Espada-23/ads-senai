<?php

session_start();

require_once 'data.php';

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = $produto_estoque;
}

//session_destroy();