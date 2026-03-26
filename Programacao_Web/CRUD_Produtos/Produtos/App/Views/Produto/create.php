<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Novo Produto</title>
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
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
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