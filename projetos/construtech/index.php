<?php
if (isset($_GET["erro"])) {

    if ($_GET["erro"] == 1) {
        echo "<p class='error-message'>Preencha os campos</p>";
    }

    if ($_GET["erro"] == 2) {
        echo "<p class='error-message'>Usuário ou senha incorretos</p>";
    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.pinimg.com/736x/57/46/81/57468180b4ea0dffc64c9fd22907da7d.jpg">
    <title>ConstruTech - Acesso Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">

    <main class="login-container">
        <header class="login-header">
            <img src="https://i.pinimg.com/originals/40/a1/01/40a1011e96c0ad6b87b941cb0ee7661d.png" alt="ConstruTech">
            <h1>ConstruTech</h1>
            <p>Acesso ao Estoque</p>
        </header>

        <form action="login.php" method="POST" class="login-form">

            <div class="input-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="nome" placeholder="Digite seu usuário" required autofocus>
            </div>

            <div class="input-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
            </div>

            <button type="submit" class="btn-submit">Entrar no Sistema</button>

        </form>

    </main>

</body>

</html>