<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novo Cliente</title>
</head>
<body>
  <h1>Novo Cliente</h1>
  <form action="?controller=cliente&action=store" method="post">
    
    <label>Nome Completo:</label>
    <input type="text" name="nomeCompleto" required><br><br>

    <label>CPF:</label>
    <input type="text" name="cpf" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <button type="submit">Cadastrar</button>
    <a href="?controller=cliente&action=index"><button type="button">Voltar</button></a>
  </form>
</body>
</html>