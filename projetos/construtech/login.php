<?php

$erro = '';

$nome = $_POST["nome"];
$senha = $_POST["senha"];

if ($nome == ""|| $senha == "") {
    $erro = "Preencha os campos para acessar o sistema";
} 
elseif ($nome != "Vicente" || $senha != "1234") {
    $erro = "Usuário ou senha incorretos. Tente novamente.";
} 
else {
    header("Location: estoque.html");
    exit();
}