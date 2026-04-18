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
                    <input type="text" name="nome" placeholder="Ex: Pedra Saco De 20Kg" maxlength="50">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria">
                        <option value="">Selecione</option>
                        <option value="bruto">Bruto</option>
                        <option value="ferramentas">Ferramentas</option>
                        <option value="acabamento">Acabamento</option>
                        <option value="hidraulica">Hidráulica</option>
                        <option value="eletrica">Elétrica</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="text" name="quantidade" placeholder="0" maxlength="5">
                </div>
                <div class="form-group">
                    <label>Preço (R$)</label>
                    <input type="text" name="preco" placeholder="0,00" maxlength="8">
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

                <a href="estoque.php?categoria=bruto">
                    <button class="filter-btn <?= $categoriaFiltro == 'bruto' ? 'active' : '' ?>">Bruto</button>
                </a>

                <a href="estoque.php?categoria=ferramentas">
                    <button class="filter-btn <?= $categoriaFiltro == 'ferramentas' ? 'active' : '' ?>">Ferramentas</button>
                </a>

                <a href="estoque.php?categoria=acabamento">
                    <button class="filter-btn <?= $categoriaFiltro == 'acabamento' ? 'active' : '' ?>">Acabamento</button>
                </a>

                <a href="estoque.php?categoria=hidraulica">
                    <button class="filter-btn <?= $categoriaFiltro == 'hidraulica' ? 'active' : '' ?>">Hidráulica</button>
                </a>

                <a href="estoque.php?categoria=eletrica">
                    <button class="filter-btn <?= $categoriaFiltro == 'eletrica' ? 'active' : '' ?>">Elétrica</button>
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
                        <th>Preço Un.</th>
                        <th>Valor Total</th>
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

                        $classe = '';

                        if ($produto['quantidade'] <= 5) {
                            $classe = 'low-stock';
                        } elseif ($produto['quantidade'] <= 15) {
                            $classe = 'medium-stock';
                        }

                        echo "<tr class='$classe'>";;
                        echo "<td>{$produto['nome']}</td>";
                        echo "<td><span class='category-tag'>{$produto['categoria']}</span></td>";
                        echo "<td>
                                    <div class='qtd-inline'>
                                        <button onclick=\"alterarQtdTabela({$produto['id']}, -1, {$produto['preco']})\">-</button>
                                        
                                        <span id='qtd-{$produto['id']}' class='qty-badge'>{$produto['quantidade']}</span>
                                        
                                        <button onclick=\"alterarQtdTabela({$produto['id']}, 1, {$produto['preco']})\">+</button>
                                    </div>
                                </td>";
                        echo "<td id='preco-{$produto['id']}'>
                                    R$ " . number_format($produto['preco'], 2, ',', '.') . "
                                </td>";
                        echo "<td id='total-{$produto['id']}'>
                                    R$ " . number_format($produto['quantidade'] * $produto['preco'], 2, ',', '.') . "
                                </td>";
                        echo "<td>
                                    <button class='btn btn-edit'
                                        onclick=\"abrirModal(
                                            '{$produto['id']}',
                                            '{$produto['nome']}',
                                            '{$produto['categoria']}',
                                            '{$produto['quantidade']}',
                                            '" . number_format($produto['preco'], 2, ',', '.') . "'
                                        )\">
                                        Editar
                                    </button>
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

    <div id="modal" class="modal">

        <div class="modal-card">

            <h3>Editar Produto</h3>

            <form method="POST" action="atualizar-produto.php">

                <input type="hidden" name="id" id="edit-id">

                <label>Nome:</label>
                <input type="text" name="nome" id="edit-nome" placeholder="Ex: Parafuso" maxlength="50"><br>

                <label>Categoria</label>
                <select name="categoria" id="edit-categoria">
                    <option value="bruto">Bruto</option>
                    <option value="ferramentas">Ferramentas</option>
                    <option value="acabamento">Acabamento</option>
                    <option value="hidraulica">Hidráulica</option>
                    <option value="eletrica">Elétrica</option>
                </select>

                <label>Quantidade:</label>
                <input type="text" name="quantidade" id="edit-quantidade" placeholder="0" maxlength="5"><br>

                <label>Preço:</label>
                <input type="text" name="preco" id="edit-preco" placeholder="0,00" maxlength="8"><br>

                <div class="modal-actions">
                    <button type="submit" class="btn btn-add">Salvar</button>
                    <button type="button" class="btn btn-cancel" onclick="fecharModal()">Cancelar</button>
                </div>

            </form>

        </div>

    </div>

    <footer>
        <div class="price-container">
            <h3>Resumo Financeiro</h3>
            <p>Valor Total em Estoque:
                <strong id="resumo-total">
                    <?php
                    $valorTotal = 0;
                    foreach ($_SESSION['produtos'] as $produto) {
                        $valorTotal += $produto['quantidade'] * $produto['preco'];
                    }
                    echo 'R$ ' . number_format($valorTotal, 2, ',', '.');
                    ?>
                </strong>
            </p>
        </div>
    </footer>

    <script>
        function abrirModal(id, nome, categoria, quantidade, preco) {

            document.getElementById('modal').style.display = 'flex';
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-nome').value = nome;
            document.getElementById('edit-categoria').value = categoria;
            document.getElementById('edit-quantidade').value = quantidade;
            document.getElementById('edit-preco').value = preco;
        }

        function fecharModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function alterarQtdTabela(id, valor, preco) {
            let span = document.getElementById('qtd-' + id);
            let atual = parseInt(span.innerText);

            let novo = atual + valor;
            if (novo < 0) novo = 0;

            span.innerText = novo;

            let total = novo * preco;

            let totalCell = document.getElementById('total-' + id);
            totalCell.innerText = 'R$ ' + total.toFixed(2).replace('.', ',');

            let row = span.closest('tr');
            row.classList.remove('low-stock', 'medium-stock');

            if (novo <= 5) {
                row.classList.add('low-stock');
            } else if (novo <= 15) {
                row.classList.add('medium-stock');
            }

            let resumo = document.getElementById('resumo-total');

            let valorAtual = resumo.innerText
                .replace('R$', '')
                .replace(/\./g, '')
                .replace(',', '.');

            valorAtual = parseFloat(valorAtual);

            let diferenca = valor * preco;

            let novoResumo = valorAtual + diferenca;

            resumo.innerText = novoResumo.toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });

            fetch('atualizar-qtd.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `id=${id}&quantidade=${novo}`
            });
        }
    </script>
</body>

</html>