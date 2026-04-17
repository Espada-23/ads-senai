<?php
include_once "init.php";

$id = $_POST['id'] ?? '';

foreach ($_SESSION['produtos'] as &$produto) {

    if ($produto['id'] == $id) {

        $nome = $_POST['nome'] ?? '';
        $categoria = $_POST['categoria'] ?? '';
        $quantidade = $_POST['quantidade'] ?? '';
        $preco = $_POST['preco'] ?? '';

        $preco = str_replace(',', '.', $preco);

        if ($nome == '' || $categoria == '' || $quantidade == '' || $preco == '') {
            echo "<script>
                alert('Preencha todos os campos!');
                window.history.back();
            </script>";
            exit;
        } elseif (!is_numeric($quantidade) || !is_numeric($preco)) {
            echo "<script>
                alert('Quantidade e preço devem ser números!');
                window.history.back();
            </script>";
            exit;
        } elseif ($quantidade < 0 || $preco < 0) {
            echo "<script>
                alert('Quantidade e preço devem ser valores positivos!');
                window.history.back();
            </script>";
            exit;
        }

        $produto['nome'] = $nome;
        $produto['categoria'] = $categoria;
        $produto['quantidade'] = $quantidade;
        $produto['preco'] = $preco;

        break;
    }
}

header("Location: estoque.php");
exit;
