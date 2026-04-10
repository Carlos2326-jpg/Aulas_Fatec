<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Cliente</title>
</head>
<body>
  <h1>Editar Cliente</h1>
  <form action="?controller=cliente&action=update" method="post">
    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">

    <label>Nome Completo:</label>
    <input type="text" name="nomeCompleto" value="<?= htmlspecialchars($cliente['nomeCompleto']) ?>" required><br><br>

    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= htmlspecialchars($cliente['cpf']) ?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required><br><br>

    <button type="submit">Atualizar</button>
    <a href="?controller=cliente&action=index"><button type="button">Voltar</button></a>
  </form>
</body>
</html>