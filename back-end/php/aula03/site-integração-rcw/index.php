<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeloja; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="imagens/rcw-logo.jpg">
</head>

<body>

        <?php
            require 'partials/header.php';
        ?>

    <section class="hero">
        <div class="container-principal">
            <h1>Potência em Escala</h1>
            <p>Explore o mundo do controle remoto de alta performance.</p>
        </div>
    </section>

    <main class="container-principal">
        <h2 class="title">Modelos em Alta</h2>

        <div class="grade-produtos">
            <div class="cartao">
                <span class="frete-gratis">Frete Grátis!</span>
                <img src="https://wetronic.nl/image/cache/catalog/Cars/Rlaarlo/Electro_Offroad/sbk10-storm-breaker-buggy/rlaarlo-sbk10-storm-breaker-buggy-metal-800x600h.jpeg.webp"
                    alt="Carro RC">
                <div class="conteudo-cartao">
                    <h3>Rlaarlo SBK10</h3>
                    <span class="price">De R$ <s>1.140,00</s></span><span class="discount">Por R$ 980,00</span>
                    <a href="produto1.php"><button class="botao-cartao">Ver Detalhes</button></a>
                </div>
            </div>

            <div class="cartao">
                <span class="frete-gratis">Frete Grátis!</span>
                <img src="https://supergdrift.com/cdn/shop/files/s-l1600_2bbcac59-a8e9-4a50-b174-65fa9a7156e5_800x.jpg?v=1706326281"
                    alt="Carro RC">
                <div class="conteudo-cartao">
                    <h3>MST RMX 2.5</h3>
                    <span class="price">De R$ <s>2.720,00</s></span><span class="discount">Por R$ 2.490 ,00</span>
                    <a href="produto2.php"><button class="botao-cartao">Ver Detalhes</button></a>
                </div>
            </div>

            <div class="cartao">
                <span class="frete-gratis">Frete Grátis!</span>
                <img src="https://i.zst.com.br/thumbs/12/a/36/-1348755890.jpg" alt="Carro RC">
                <div class="conteudo-cartao">
                    <h3>Traxxas X-Maxx 8S</h3>
                    <span class="price">De R$ <s>3.750,00</s></span><span class="discount">Por R$ 3.579,00</span>
                    <a href="produto3.php"><button class="botao-cartao">Ver Detalhes</button></a>
                </div>
            </div>
        </div>
        <div class="produtos">
            <a href="catalogo.php"><button>Confira o Catálogo Completo</button></a>
        </div>
    </main>

    <section class="secao-contato">
        <div class="container-principal">
            <h2 class="title">Contato</h2>
            <form class="formulario-contato">
                <input type="text" placeholder="Seu Nome" required>
                <input type="tel" placeholder="Seu Telefone" required>
                <input type="email" placeholder="Seu E-mail" required>
                <textarea rows="5" placeholder="Sua dúvida ou interesse..."></textarea>
                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container-principal conteudo-rodape-simples">

            <div class="logo-rodape">RC<span>W</span></div>
            <p>Acelerando sua paixão por automodelismo RC.</p>

            <div class="copyright-simples">
                <p>Copyright &copy; 2026 RCW | Todos os direitos reservados.</p>
            </div>

        </div>
    </footer>

</body>

</html>