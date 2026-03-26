<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Completo - RCW</title>
    <link rel="stylesheet" href="catalogo.css">
    <link rel="icon" type="image/x-icon" href="imagens/rcw-logo.jpg">
</head>

<body>

    <header>
        <div class="container-principal cabecalho-catalogo">
            <div class="logo">RC<span>W</span></div>
            <div class="espaco">
                <a href="index.php" class="btn-voltar">&larr; Voltar ao Início</a>
                <a href="cadastro.php" class="btn-cadastro">Cadastrar/Entrar</a>
            </div>
        </div>
    </header>

    <section class="titulo-pagina">
        <div class="container-principal">
            <h1>Catálogo de Veículos</h1>
            <p>Encontre o modelo perfeito para o seu estilo de pilotagem.</p>
        </div>
    </section>

    <main class="container-principal layout-catalogo">
        <aside class="filtros">
            <h3>Filtros</h3>

            <div class="grupo-filtro">
                <h4>Categorias</h4>
                <label><input type="checkbox"> Buggy</label>
                <label><input type="checkbox"> Drift</label>
                <label><input type="checkbox"> Monster Truck</label>
                <label><input type="checkbox"> Crawler</label>
                <label><input type="checkbox"> Short Course</label>
            </div>

            <div class="grupo-filtro">
                <h4>Marcas</h4>
                <label><input type="checkbox"> Traxxas</label>
                <label><input type="checkbox"> Rlaarlo</label>
                <label><input type="checkbox"> MST</label>
                <label><input type="checkbox"> Arrma</label>
                <label><input type="checkbox"> Axial</label>
            </div>

            <button class="btn-filtrar">Aplicar Filtros</button>
        </aside>

        <section class="area-produtos">
            <div class="grade-produtos">
                <div class="cartao">
                    <span class="frete-gratis">Frete Grátis!</span>
                    <img src="https://wetronic.nl/image/cache/catalog/Cars/Rlaarlo/Electro_Offroad/sbk10-storm-breaker-buggy/rlaarlo-sbk10-storm-breaker-buggy-metal-800x600h.jpeg.webp"
                        alt="Rlaarlo SBK10">
                    <div class="conteudo-cartao">
                        <h3>Rlaarlo SBK10</h3>
                        <span class="price">De R$ <s>1.140,00</s></span><span class="discount">Por R$ 980,00</span>
                        <a href="produto1.php" class="botao-cartao"><button >Comprar</button></a>
                    </div>
                </div>

                <div class="cartao">
                    <span class="frete-gratis">Frete Grátis!</span>
                    <img src="https://supergdrift.com/cdn/shop/files/s-l1600_2bbcac59-a8e9-4a50-b174-65fa9a7156e5_800x.jpg?v=1706326281"
                        alt="MST RMX 2.5">
                    <div class="conteudo-cartao">
                        <h3>MST RMX 2.5</h3>
                        <span class="price">De R$ <s>2.720,00</s></span><span class="discount">Por R$ 2.490,00</span>
                        <a href="produto2.php" class="botao-cartao"><button>Comprar</button></a>
                    </div>
                </div>

                <div class="cartao">
                    <span class="frete-gratis">Frete Grátis!</span>
                    <img src="https://i.zst.com.br/thumbs/12/a/36/-1348755890.jpg" alt="Traxxas Monster Truck">
                    <div class="conteudo-cartao">
                        <h3>Traxxas X-Maxx 8S</h3>
                        <span class="price">De R$ <s>3.750,00</s></span><span class="discount">Por R$ 3.579,00</span>
                        <a href="produto3.php" class="botao-cartao"><button>Comprar</button></a>
                    </div>
                </div>

                <div class="cartao">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/Sfcaa6aa011c440bf9961615fcfbdc4cfS.jpg_640x640q75.jpg_.avif"
                        alt="Arrma Kraton">
                    <div class="conteudo-cartao">
                        <h3>Arrma Kraton 6S BLX</h3>
                        <span class="price">Apenas</span><span class="discount">R$ 5.450,00</span>
                        <a href="produto4.php" class="botao-cartao"><button>Comprar</button></a>
                    </div>
                </div>

                <div class="cartao">
                    <span class="frete-gratis">-    8% Off</span>
                    <img src="https://cdn.awsli.com.br/600x1000/2122/2122929/produto/135443001/239559-1000x1000-11bb0pi722.jpg"
                        alt="Axial SCX10 III">
                    <div class="conteudo-cartao">
                        <h3>Axial SCX10 III Jeep</h3>
                        <span class="price">De R$ <s>4.500,00</s></span><span class="discount">Por R$ 4.100,00</span>
                        <a href="produto5.php" class="botao-cartao"><button>Comprar</button></a>
                    </div>
                </div>

                <div class="cartao">
                    <span class="frete-gratis">Lançamento</span>
                    <img src="https://www.flashrc.com/129581-large_default/traxxas-slash-4wd-vxl-red-tsm-id-rtr-without-battery-charger-68086-4.jpg"
                        alt="Traxxas Slash 4x4">
                    <div class="conteudo-cartao">
                        <h3>Traxxas Slash 4x4 VXL</h3>
                        <span class="price">Apenas</span><span class="discount">R$ 3.890,00</span>
                        <a href="produto6.php"class="botao-cartao"><button >Comprar</button></a>
                    </div>
                </div>
            </div>

            <div class="paginacao">
                <button class="ativo">1</button>
                <button>2</button>
                <button>3</button>
                <button>Próxima &raquo;</button>
            </div>
        </section>
    </main>

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