<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/index.css">
  <title>Exercicio 02 - Calculadora</title>
</head>

<body>
  <form action="" method="post">
    <section id="section-vizualizar">
      0
    </section>

    <section id="sectio-group">
      <input type="submit" name="botao" value="(" class="input-equacao">
      <input type="submit" name="botao" value=")" class="input-equacao">
      <input type="submit" name="botao" value="%" class="input-equacao">
      <input type="submit" name="botao" value="CE" class="input-equacao">
    </section>

    <section id="sectio-group">
      <input type="submit" name="botao" value="7" class="input-number">
      <input type="submit" name="botao" value="8" class="input-number">
      <input type="submit" name="botao" value="9" class="input-number">
      <input type="submit" name="botao" value="÷" class="input-equacao">
    </section>

    <section id="sectio-group">
      <input type="submit" name="botao" value="4" class="input-number">
      <input type="submit" name="botao" value="5" class="input-number">
      <input type="submit" name="botao" value="6" class="input-number">
      <input type="submit" name="botao" value="x" class="input-equacao">
    </section>

    <section id="sectio-group">
      <input type="submit" name="botao" value="1" class="input-number">
      <input type="submit" name="botao" value="2" class="input-number">
      <input type="submit" name="botao" value="3" class="input-number">
      <input type="submit" name="botao" value="-" class="input-equacao">
    </section>

    <section id="sectio-group">
      <input type="submit" name="botao" value="0" class="input-number">
      <input type="submit" name="botao" value="." class="input-number">
      <input type="submit" name="botao" value="=" id="input-submit">
      <input type="submit" name="botao" value="+" class="input-equacao">
    </section>
  </form>
</body>

</html>