<?php
include_once "init.php";
$categoriaFiltro = $_GET['categoria'] ?? 'todos';
$busca = $_GET['busca'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.pinimg.com/736x/57/46/81/57468180b4ea0dffc64c9fd22907da7d.jpg">
    <title>ConstruTech – Gestão de Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <img src="https://i.pinimg.com/originals/40/a1/01/40a1011e96c0ad6b87b941cb0ee7661d.png" alt="ConstruTech">
        <h1>ConstruTech – Gestão de Estoque</h1>
        <div>
            <a href="../index.php"><button class="btn-logout">Sair</button></a>
        </div>
    </header>

    <div class="container">

        <section class="card">
            <h2>Novo Produto</h2>
            <form class="grid-form" method="POST" action="cadastro-produto.php">
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" name="nome" placeholder="Ex: Cimento CP II 50kg">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria">
                        <option value="">Selecione</option>
                        <option value="bruto">Bruto</option>
                        <option value="ferramentas">Ferramentas</option>
                        <option value="acabamento">Acabamento</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="text" name="quantidade" placeholder="0">
                </div>
                <div class="form-group">
                    <label>Preço (R$)</label>
                    <input type="text" name="preco" placeholder="0,00">
                </div>
                <button type="submit" class="btn btn-add">Adicionar Produto</button>
            </form>
        </section>

        <section class="card">
            <h2>Inventário de Produtos</h2>

            <div class="filters">
                <a href="estoque.php?categoria=todos">
                    <button class="filter-btn <?= $categoriaFiltro == 'todos' ? 'active' : '' ?>">Todos</button>
                </a>

                <a href="estoque.php?categoria=Bruto">
                    <button class="filter-btn <?= $categoriaFiltro == 'Bruto' ? 'active' : '' ?>">Bruto</button>
                </a>

                <a href="estoque.php?categoria=Ferramentas">
                    <button class="filter-btn <?= $categoriaFiltro == 'Ferramentas' ? 'active' : '' ?>">Ferramentas</button>
                </a>

                <a href="estoque.php?categoria=Acabamento">
                    <button class="filter-btn <?= $categoriaFiltro == 'Acabamento' ? 'active' : '' ?>">Acabamento</button>
                </a>

                <form method="GET" action="estoque.php">
                    <input type="text" name="busca" placeholder="Buscar produto...">
                    <input type="hidden" name="categoria" value="<?= $categoriaFiltro ?>">
                    <button type="submit" class="btn btn-add">Buscar</button>
                </form>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--  <tr>
                        <td>Cimento Cauê 50kg</td>
                        <td><span class="category-tag">Bruto</span></td>
                        <td>45</td>
                        <td>R$ 38,90</td>
                        <td>
                            <button class="btn btn-edit">Editar</button>
                            <button class="btn btn-delete">Remover</button>
                        </td>
                    </tr> -->
                    <?php
                    foreach ($_SESSION['produtos'] as $produto) {

                        if ($categoriaFiltro != 'todos' && $produto['categoria'] != $categoriaFiltro) {
                            continue;
                        }
                        if ($busca != '' && stripos($produto['nome'], $busca) === false) {
                            continue;
                        }
                        echo "<tr>";
                        echo "<td>{$produto['nome']}</td>";
                        echo "<td><span class='category-tag'>{$produto['categoria']}</span></td>";
                        echo "<td>{$produto['quantidade']}</td>";
                        echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
                        echo "<td>
                                    <button class='btn btn-edit'>Editar</button>
                                    <a href='remover-produto.php?id={$produto['id']}' 
                                        onclick='return confirm(\"Tem certeza que deseja remover este produto?\")'>
                                        <button class='btn btn-delete'>Remover</button>
                                    </a>
                                  </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>

    <footer>
        <div class="price-container">
            <h3>Resumo Financeiro</h3>
            <p>Valor Total em Estoque: <strong>R$ 00,00</strong></p>
        </div>
    </footer>

</body>

</html>