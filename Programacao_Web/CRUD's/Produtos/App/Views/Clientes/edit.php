<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Cliente</title>
</head>

<body>
  <h1>Editar Produto</h1>
  <form method="POST" action="?action=update">
    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">

    <label>Nome Completo:</label>
    <input type="text" name="nomeCompleto" value="<?= htmlspecialchars($cliente['nomeCompleto']) ?>" required>

    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= htmlspecialchars($cliente['cpf']) ?>" required>

    <label>email:</label>
    <input type="text" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required>
  </form>
</body>

</html>