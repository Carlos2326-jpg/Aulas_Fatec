<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novo Cliente</title>
</head>

<body>
  <h1>Novo Cliente</h1>
  <form method="POST" action="?controller=produtos&action=store">
    <label>Nome Completo:</label>
    <input type="text" name="nomeCompleto" required>

    <label>CPF:</label>
    <input type="text" name="cpf" required>

    <label>email:</label>
    <input type="text" name="email" required>

    <button type="submit">Salvar</button>
    <a href="?controller=clientes&action=index" class="btn-back"><button type="button">Voltar</button></a>
  </form>
</body>

</html>