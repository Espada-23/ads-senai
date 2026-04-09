<?php

$nome = $_POST["nome"];
$senha = $_POST["senha"];

if ($nome == "" || $senha == "") {
    header("Location: index.php?erro=1");
    exit;
} 
elseif ($nome != "Vicente" || $senha != "1234") {
    header("Location: index.php?erro=2");
    exit;
} 
else {
    header("Location: /Git-Senai/ads-senai/projetos/construtech/estoque/estoque.html");
    exit;
}