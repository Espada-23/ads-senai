<?php
include_once "init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = trim($_POST['nome'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $quantidade = trim($_POST['quantidade'] ?? '');
    $preco = trim($_POST['preco'] ?? '');

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
