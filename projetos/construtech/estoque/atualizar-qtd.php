<?php
include_once "init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $quantidade = $_POST['quantidade'];

    foreach ($_SESSION['produtos'] as &$produto) {
        if ($produto['id'] == $id) {
            $produto['quantidade'] = $quantidade;
            break;
        }
    }

    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok']);
}   