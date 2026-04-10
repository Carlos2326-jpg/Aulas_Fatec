<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Produto</title>
</head>

<body>
  <h1>Editar Produto</h1>
  <form method="POST" action="?action=update">
    <input type="hidden" name="id" value="<?= $produto['id'] ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required>

    <label>Descrição:</label>
    <textarea name="descricao" rows="3"><?= htmlspecialchars($produto['descricao']) ?></textarea>

    <label>Preço:</label>
    <input type="text" name="preco" value="<?= $produto['preco'] ?>" required pattern="[0-9]+([\.,][0-9]+)?" placeholder="0.00">

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" required min="0">

    <button type="submit">Atualizar</button>
    <a href="index.php" class="btn-back"><button type="button">Voltar</button></a>
  </form>
</body>

</html>