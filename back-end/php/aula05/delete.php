<?php

require_once 'crud.php';

$idLivro = 675;
$deletarLivro = delete($pdo, 'livros', "id = $idLivro");
echo "O livro com ID " . $idLivro . " foi deletado com sucesso!";