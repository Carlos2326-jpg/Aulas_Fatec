<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
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