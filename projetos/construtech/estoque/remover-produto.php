<?php
include_once "init.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    foreach ($_SESSION['produtos'] as $key => $produto) {
        if ($produto['id'] == $id) {
            unset($_SESSION['produtos'][$key]);
            break;
        }
    }

    $_SESSION['produtos'] = array_values($_SESSION['produtos']);
}

header("Location: estoque.php");
exit;