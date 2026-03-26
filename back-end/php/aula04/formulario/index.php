<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Contato</title>
</head>

<body>
    <h1>Formulário de Contato</h1>
        <form action="receba.php" method="post">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text"  name="endereco" placeholder="Endereço">
            <input type="email" name="email" placeholder="Email">
            <select name="pais">
            <option value="">Selecione um País</option>
            <option value="Brasil">Brasil</option>
            <option value="França">França</option>
            <option value="Croácia">Croácia</option>
            <option value="Portugal">Portugal</option>
            <option value="Argentina">Argentina</option>
            <option value="Uruguai">Uruguai</option>
        </select>
        <div>
            <input type="radio" name="turno" value="Manhã">Manhã
            <input type="radio" name="turno" value="Tarde">Tarde
            <input type="radio" name="turno" value="Noite">Noite
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html> 