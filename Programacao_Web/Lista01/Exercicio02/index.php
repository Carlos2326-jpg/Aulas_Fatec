<!DOCTYPE html>
<html lang="pt-brs">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 02 -</title>
</head>

<body>
  <form action="" method="post">
    <section id="section-block">
      <input type="number" name="number" id="input-number" required>
      <label for="number">digite o valor:</label>
    </section>

    <input type="submit" value="Enviar" id="submt">
  </form>

  <?php
  function NumeroNegativo($valor)
  {
    return $valor < 0;
  }

  function somarDigitos($valor)
  {
    $numero = abs($valor);
    $soma = 0;

    while ($numero > 0) {
      $soma += $numero % 10;
      $numero = floor($numero / 10);
    }

    return $soma;
  }

  $number = $_POST['number'];

  if (NumeroNegativo($number)) {
    echo "<p style='color: red;'>Não é permitido numero negativo!</p>";
  } elseif (floor($number) != $number) {
    echo "<p style='color: red;'>Só é permitido numero inteiro!</p>";
  } else {
    echo somarDigitos($number);
  }
  ?>
</body>

</html>