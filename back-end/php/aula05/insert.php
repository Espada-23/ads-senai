<?php

require_once 'crud.php';

$novoLivro = [
    'titulo' => 'PHP for dummies',
    'isbn' => '9781234567890',
    'autor' => 'John Doe',
    'preco' => 49.90,
    'situacao' => 'Disponivel',
    'categoria' => 'Informatica'
];

$novoCadastro = create($pdo, 'livros', $novoLivro);
echo 'Novo livro inserido com ID: ' . $novoCadastro;