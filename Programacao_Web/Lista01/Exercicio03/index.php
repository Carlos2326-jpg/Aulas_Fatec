<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 03 -</title>
</head>

<body>
  <form action="" method="post">
    <section id="section-block">
      <input type="number" name="valor" id="input-number" step="0.1" required>
      <label for="valor">Digite o valor do produto</label>
    </section>

    <section id="section-block">
      <input type="number" name="percentual" id="input-number" step="0.1" required>
      <label for="percentual">Digite a porcentagem de lucro</label>
    </section>

    <input type="submit" value="Enviar" id="input-sub">
  </form>

  <?php
  function ValorNeegativo($valor)
  {
    return $valor < 0;
  }

  function CalcularCusto($valorProd, $percent) {
    return $valorProd * (1 - ($percent / 100));
  }

  $valorProd = $_POST['valor'];
  $percent = $_POST['percentual'];

  if (ValorNeegativo($valorProd) || ValorNeegativo($percent)) {
    echo "<p style='color: red'>Valores não podem ser negativos</p>";
  } else {
    echo "<p>Valor de custo do produto é: " . number_format(CalcularCusto($valorProd, $percent), 2, ",", ".") . "</p>";
  }
  ?>
</body>

</html>