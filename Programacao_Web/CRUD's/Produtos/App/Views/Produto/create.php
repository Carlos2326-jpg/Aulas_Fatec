<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Novo Produto</title>
</head>

<body>
  <h1>Novo Produto</h1>
  <form method="POST" action="?action=store">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Descrição:</label>
    <textarea name="descricao" rows="3"></textarea>

    <label>Preço:</label>
    <input type="text" name="preco" required pattern="[0-9]+([\.,][0-9]+)?" placeholder="0.00">

    <label>Quantidade:</label>
    <input type="number" name="quantidade" required min="0">

    <button type="submit">Salvar</button>
    <a href="index.php" class="btn-back"><button type="button">Voltar</button></a>
  </form>
</body>

</html>