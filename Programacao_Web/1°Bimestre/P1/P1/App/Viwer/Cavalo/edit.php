<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cavalo</title>
</head>
<body>
    <h1>Editar Cavalo</h1>

    <form method="post" action="?controller=cavalo&action=update">

        <input type="hidden" name="id" value="<?= $cavalos['id'] ?>"> 

        <label for="nome">Nome do Cavalo</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($cavalos['cav_nome']) ?>" required> 

        <label for="raca">Raça do Cavalo</label>
        <input type="text" name="raca" id="raca" value="<?= htmlspecialchars($cavalos['cav_raca']) ?>" required> 
        
        <label for="cor">Cor do Cavalo</label>
        <input type="text" name="cor" id="cor" value="<?= htmlspecialchars($cavalos['cav_cor']) ?>" required> 
        
        <label for="sexo">Sexo do Cavalo</label>
        <input type="text" name="sexo" id="sexo" value="<?= htmlspecialchars($cavalos['cav_sexo']) ?>" required> 

        <button type="submit">Atualizar</button>
        <a href="?controller=cavalo&action=index"><button type="button">Voltar</button></a>
    </form>
</body>
</html>