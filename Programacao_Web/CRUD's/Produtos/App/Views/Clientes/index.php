<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
</head>

<body>
  <h1>Lista de Produtos</h1>

  <?php if (isset($_GET['success'])): ?>
    <div class="success">
      <?php
      if ($_GET['success'] == 1) echo "Cliente cadastrado com sucesso!";
      if ($_GET['success'] == 2) echo "Cliente atualizado com sucesso!";
      if ($_GET['success'] == 3) echo "Cliente excluído com sucesso!";
      ?>
    </div>
  <?php endif; ?>

  <a href="?action=create">Novo Cliente</a>
  <br><br>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>email</th>
      </tr>
    </thead>

    <tbody>
      <?php if (empty($produtos)): ?>
        <tr>
          <td colspan="6" style="text-align: center;">Nenhum cliente cadastrado</td>
        </tr>
      <?php else: ?>
        <?php foreach ($client as $cliente): ?>
          <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= htmlspecialchars($cliente['nomeCompleto']) ?></td>
            <td><?= htmlspecialchars($cliente['cpf']) ?></td>
            <td><?= htmlspecialchars($cliente['email']) ?></td>
            <td>
              <a href="?action=edit&id=<?= $cliente['id'] ?>">Editar</a>
              <a href="?action=delete&id=<?= $cliente['id'] ?>"
                onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</body>

</html>