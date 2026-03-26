<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 4px;
    }

    .btn {
      display: inline-block;
      padding: 5px 10px;
      margin: 2px;
      text-decoration: none;
      border-radius: 3px;
    }

    .btn-add {
      background-color: #4CAF50;
      color: white;
    }

    .btn-edit {
      background-color: #2196F3;
      color: white;
    }

    .btn-delete {
      background-color: #f44336;
      color: white;
    }

    .btn-back {
      background-color: #666;
      color: white;
    }
  </style>
</head>

<body>
  <h1>Lista de Produtos</h1>

  <?php if (isset($_GET['success'])): ?>
    <div class="success">
      <?php
      if ($_GET['success'] == 1) echo "Produto cadastrado com sucesso!";
      if ($_GET['success'] == 2) echo "Produto atualizado com sucesso!";
      if ($_GET['success'] == 3) echo "Produto excluído com sucesso!";
      ?>
    </div>
  <?php endif; ?>

  <a href="?action=create" class="btn btn-add">Novo Produto</a>
  <br><br>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($produtos)): ?>
        <tr>
          <td colspan="6" style="text-align: center;">Nenhum produto cadastrado</td>
        </tr>
      <?php else: ?>
        <?php foreach ($produtos as $produto): ?>
          <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= htmlspecialchars($produto['nome']) ?></td>
            <td><?= htmlspecialchars($produto['descricao']) ?></td>
            <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
            <td><?= $produto['quantidade'] ?></td>
            <td>
              <a href="?action=edit&id=<?= $produto['id'] ?>" class="btn btn-edit">Editar</a>
              <a href="?action=delete&id=<?= $produto['id'] ?>"
                class="btn btn-delete"
                onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</body>

</html>