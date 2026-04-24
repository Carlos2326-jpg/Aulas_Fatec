<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cavalo</title>
</head>
<body>

    <h1>Adicionar Cavalo</h1>
    <form action="?controller=cavalo&action=store" method="post">
        <label for="nome">Nome do Cavalo</label>
        <input type="text" name="nome" require>

        <label for="cav_raca">Raça do Cavalo</label>
        <input type="text" name="raca" require>
        
        <label for="cor">Cor do Cavalo</label>
        <input type="text" name="cor" require>
        
        <label for="sexo">Sexo do Cavalo</label>
        <input type="text" name="sexo" require>

        <button type="submit">Cadastrar</button>
        <a href="?controller=cavalo&action=index"><button type="button">Voltar</button></a>
    </form>
</body>
</html>