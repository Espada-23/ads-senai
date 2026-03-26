<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - RCW</title>
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
                <h2>Crie sua conta</h2>
                <p>Junte-se à RCW e acelere com a gente.</p>
                
                <div class="grupo-input">
                    <label for="nome-cadastro">Nome Completo</label>
                    <input type="text" id="nome-cadastro" placeholder="João da Silva" required>
                </div>

                <div class="grupo-input">
                    <label for="email-cadastro">E-mail</label>
                    <input type="email" id="email-cadastro" placeholder="seu@email.com" required>
                </div>
                
                <div class="grupo-input">
                    <label for="senha-cadastro">Crie uma Senha</label>
                    <input type="password" id="senha-cadastro" placeholder="Mínimo de 8 caracteres" required>
                </div>
                
                <button type="submit" class="btn-principal">Criar Conta</button>

                <div class="link-alternativo">
                    <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
                </div>
            </form>

        </div>
    </main>

</body>
</html>