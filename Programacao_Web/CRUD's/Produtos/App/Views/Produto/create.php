<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Public/CSS/Create/index.css">
  <title>Novo Produto</title>
</head>

<body>
  <h1>Novo Produto</h1> 
  <form method="POST" action="?controller=produtos&action=store">
    <section class="section-group">
      <label class="label-title">Nome:</label>
      <input type="text" name="nome" class="input-text" required>
    </section>

    <section class="section-group">
      <label class="label-title">Descrição:</label>
      <textarea name="descricao" rows="3" class="input-text"></textarea>    
    </section>

    <section class="section-group">
      <label class="label-title">Preço:</label>
      <input type="text" name="preco" required class="input-text" pattern="[0-9]+([\.,][0-9]+)?" placeholder="0.00">
    </section>

    <section class="section-group">
      <label class="label-title">Quantidade:</label>
      <input type="number" name="quantidade" required min="0" class="input-text">
    </section>

    <section class="section-group">
      <button type="submit" href="?controller=produtos&action=index" class="button-salvar">Salvar</button>
      <a href="?controller=produtos&action=index" class="button-voltar"><button type="button">Voltar</button></a>
    </section>
  </form>
</body>

</html>