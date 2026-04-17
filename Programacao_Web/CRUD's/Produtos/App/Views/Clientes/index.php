<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clientes</title> <!-- Corrigido título -->
</head>

<body>
  <h1>Lista de Clientes</h1> <!-- Corrigido título -->

  <?php if (isset($_GET['success'])): ?>
    <div class="success">
      <?php
      if ($_GET['success'] == 1) echo "Cliente cadastrado com sucesso!";
      if ($_GET['success'] == 2) echo "Cliente atualizado com sucesso!";
      if ($_GET['success'] == 3) echo "Cliente excluído com sucesso!";
      ?>
    </div>
  <?php endif; ?>

  <a href="?controller=home" class="btn-home">Voltar ao Início</a>
  <a href="?controller=clientes&action=create">Novo Cliente</a>
  <br><br>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      <?php if (empty($clientes)): ?> 
        <tr>
          <td colspan="5" style="text-align: center;">Nenhum cliente cadastrado</td>
        </tr>
      <?php else: ?>
        <?php foreach ($clientes as $cliente): ?>
          <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= htmlspecialchars($cliente['nomeCompleto']) ?></td>
            <td><?= htmlspecialchars($cliente['cpf']) ?></td>
            <td><?= htmlspecialchars($cliente['email']) ?></td>
            <td>
              <a href="?controller=clientes&action=edit&id=<?= $cliente['id'] ?>">Editar</a>
              <a href="?controller=clientes&action=delete&id=<?= $cliente['id'] ?>"
                onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</body>

</html>