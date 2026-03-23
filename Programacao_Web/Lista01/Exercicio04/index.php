<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 04 -</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="peso" id="input-number">
    <label for="peso">Digite o peso do peixo (kg)</label>

    <input type="submit" value="Enviar">
  </form>
  <?php
  function ValorNeegativo($valor)
  {
    return $valor < 0;
  }

  function VerificarPeso($valor) {
    $pesoLim = 50;
    $inposto = 4;

    if ($valor <= $pesoLim) {
      echo 'o pesoa do peixe está demtro da norma establicida';
    } else {
      $pesoExtra = $valor - $pesoLim;
    }
  }

  $pesoTot = $_POST['peso'];

  if (ValorNeegativo($pesoTot)) {
    echo "<p style='color: red;'>O peso do peixe não pode ser negativo!</p>";
  }

  ?>
</body>

</html>