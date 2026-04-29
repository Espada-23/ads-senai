<?php

require_once 'crud.php';

echo '<h1>Lista de Livros</h1>';
echo '<body style="font-family: Arial, sans-serif; margin: 20px; justify-content: center; align-items: center; display: flex; flex-direction: column;">';
echo '<table border="1" style="border-collapse: collapse; width: 80%; background-color: #fff;">';
    echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Título</th>';
        echo '<th>Autor</th>';;
        echo '<th>Preço</th>';
    echo '</tr>';

$livros = readAll($pdo, 'livros', 'id > 670');

foreach ($livros as $livro) {
    echo "<tr>";
    echo "<td>" . $livro['id'] . "</td>";
    echo "<td>" . $livro['titulo'] . "</td>";
    echo "<td>" . $livro['autor'] . "</td>";
    echo "<td>R$ " . number_format($livro['preco'], 2, ',', '.') . "</td>";
    echo "</tr>";
}

echo '</table>';
echo '</body>';

$livro = read($pdo, 'livros', 'id = 675');
if($livro) {
    echo '<h2>Detalhes do Livro ID ' . $livro['id'] . '</h2>';
    echo '<p><strong>Título:</strong> ' . $livro['titulo'] . '</p>';
    echo '<p><strong>Autor:</strong> ' . $livro['autor'] . '</p>';
    echo '<p><strong>Preço:</strong> R$ ' . number_format($livro['preco'], 2, ',', '.') . '</p>';
} else {
    echo '<p>Livro com ID ' . $livro['id'] . ' não encontrado.</p>';
}