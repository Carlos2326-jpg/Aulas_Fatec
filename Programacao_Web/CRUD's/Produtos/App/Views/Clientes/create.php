<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novo Cliente</title>
</head>

<body>
  <h1>Novo Produto</h1>
  <form method="POST" action="?action=store">
    <label>Nome Completo:</label>
    <input type="text" name="nomeCompleto" required>

    <label>CPF:</label>
    <input type="text" name="cpf" required>

    <label>email:</label>
    <input type="text" name="email" required>

    <button type="submit">Salvar</button>
    <a href="index.php" class="btn-back"><button type="button">Voltar</button></a>
  </form>
</body>

</html>