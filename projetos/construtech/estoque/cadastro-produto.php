<?php
include_once "init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nome = trim($_POST['nome'] ?? '');
    $imagem = trim($_POST['imagem'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $quantidade = trim($_POST['quantidade'] ?? '');
    $preco = trim($_POST['preco'] ?? '');
    $id = count($_SESSION['produtos']) > 0 
    ? max(array_column($_SESSION['produtos'], 'id')) + 1 
    : 1;

    $preco = str_replace('.', '', $preco);
    $preco = str_replace(',', '.', $preco);

    if($nome == '' || $categoria == '' || $quantidade == '' || $preco == '') {
        echo "<script>
                alert('Preencha todos os campos!');
                window.history.back();
            </script>";
        exit;
    }elseif (!is_numeric($quantidade) || !is_numeric($preco)) {
        echo "<script>
                alert('Quantidade e preço devem ser números!');
                window.history.back();
            </script>";
        exit;
    }elseif ($quantidade < 0 || $preco < 0) {
        echo "<script>
                alert('Quantidade e preço devem ser valores positivos!');
                window.history.back();
            </script>";
        exit;
    }

        $novoProduto = [
            'id' => $id,
            'nome' => $nome,
            'imagem' => $imagem,
            'categoria' => $categoria,
            'quantidade' => $quantidade,
            'preco' => $preco
        ];

        $_SESSION['produtos'][] = $novoProduto;

        unset($_POST);

        header("Location: estoque.php");
        exit;
}
