<?php
include_once "init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';
    $preco = $_POST['preco'] ?? '';

   if (!is_numeric($quantidade) || !is_numeric($preco)) {
    echo "<script>
            alert('Quantidade e preço devem ser números!');
            window.history.back();
          </script>";
    exit;
}

    $novoProduto = [
        'nome' => $nome,
        'categoria' => $categoria,
        'quantidade' => $quantidade,
        'preco' => $preco
    ];

    $_SESSION['produtos'][] = $novoProduto;

    unset($_POST);

    header("Location: estoque.php");
    exit;
}
