<?php
require_once __DIR__ "../../../Public/index.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Editar Produto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    form {
      width: 500px;
    }

    input,
    textarea {
      width: 100%;
      padding: 8px;
      margin: 5px 0 15px 0;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    button {
      background-color: #2196F3;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0b7dda;
    }

    .btn-back {
      background-color: #666;
    }

    .btn-back:hover {
      background-color: #555;
    }
  </style>
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