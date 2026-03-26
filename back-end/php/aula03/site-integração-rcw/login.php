<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - RCW</title>
    <link rel="stylesheet" href="autenticacao.css">
    <link rel="icon" type="image/x-icon" href="imagens/rcw-logo.jpg">
</head>

<body>

    <header>
        <div class="container-principal cabecalho-simples">
            <div class="logo">RC<span>W</span></div>
            <a href="index.php" class="btn-voltar">&larr; Voltar à Loja</a>
        </div>
    </header>

    <main class="container-principal layout-centralizado">
        <div class="caixa-autenticacao">
            
            <form class="formulario">
                <h2>Bem-vindo de volta!</h2>
                <p>Acesse sua conta para ver seus pedidos.</p>
                
                <div class="grupo-input">
                    <label for="email-login">E-mail</label>
                    <input type="email" id="email-login" placeholder="seu@email.com" required>
                </div>
                
                <div class="grupo-input">
                    <label for="senha-login">Senha</label>
                    <input type="password" id="senha-login" placeholder="••••••••" required>
                </div>
                
                <a href="#" class="esqueci-senha">Esqueci minha senha</a>
                
                <button type="submit" class="btn-principal">Entrar na Conta</button>

                <div class="link-alternativo">
                    <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
                </div>
            </form>

        </div>
    </main>

</body>
</html>     