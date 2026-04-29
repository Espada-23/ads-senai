<?php

require_once 'crud.php';

$idLivro = 675;

$dadosAtualizados = [
    'titulo' => 'PHP for Experts',
    'autor' => 'Jane Smith',
    'preco' => 79.90
];

$livroAtualizado = update($pdo, 'livros', $dadosAtualizados, "id = $idLivro");
echo "O livro com ID $idLivro foi atualizado com sucesso! <br>";
echo "Linhas afetadas: " . $livroAtualizado;