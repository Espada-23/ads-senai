<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <form class="grid-form" onsubmit="return false;">
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <input type="text" placeholder="Ex: Cimento CP II 50kg">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select>
                        <option value="bruto">Bruto</option>
                        <option value="ferramentas">Ferramentas</option>
                        <option value="acabamento">Acabamento</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="text" placeholder="0">
                </div>
                <div class="form-group">
                    <label>Preço (R$)</label>
                    <input type="text" placeholder="0,00">
                </div>
                <button class="btn btn-add">Adicionar Produto</button>
            </form>
        </section>

        <section class="card">
            <h2>Inventário de Produtos</h2>

            <div class="filters">
                <button class="filter-btn active">Todos</button>
                <button class="filter-btn">Bruto</button>
                <button class="filter-btn">Ferramentas</button>
                <button class="filter-btn">Acabamento</button>
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
                    <tr>
                        <td>Cimento Cauê 50kg</td>
                        <td><span class="category-tag">Bruto</span></td>
                        <td>45</td>
                        <td>R$ 38,90</td>
                        <td>
                            <button class="btn btn-edit">Editar</button>
                            <button class="btn btn-delete">Remover</button>
                        </td>
                    </tr>
                    <tr class="low-stock">
                        <td>Martelo de Unha Thompson</td>
                        <td><span class="category-tag">Ferramentas</span></td>
                        <td><span class="qty-badge">3</span></td>
                        <td>R$ 45,00</td>
                        <td>
                            <button class="btn btn-edit">Editar</button>
                            <button class="btn btn-delete">Remover</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Porcelanato Delta 80x80</td>
                        <td><span class="category-tag">Acabamento</span></td>
                        <td>120</td>
                        <td>R$ 89,90</td>
                        <td>
                            <button class="btn btn-edit">Editar</button>
                            <button class="btn btn-delete">Remover</button>
                        </td>
                    </tr>
                    <tr class="low-stock">
                        <td>Tinta Acrílica Branca 18L</td>
                        <td><span class="category-tag">Acabamento</span></td>
                        <td><span class="qty-badge">2</span></td>
                        <td>R$ 249,00</td>
                        <td>
                            <button class="btn btn-edit">Editar</button>
                            <button class="btn btn-delete">Remover</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Vergalhão 3/8 pol 12m</td>
                        <td><span class="category-tag">Bruto</span></td>
                        <td>15</td>
                        <td>R$ 62,10</td>
                        <td>
                            <button class="btn btn-edit">Editar</button>
                            <button class="btn btn-delete">Remover</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <footer>
        <div class="price-container">
            <h3>Resumo Financeiro</h3>
            <p>Valor Total em Estoque: <strong>R$ 1.652,00</strong></p>
        </div>
    </footer>

</body>

</html>