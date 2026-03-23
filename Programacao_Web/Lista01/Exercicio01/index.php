<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Exercicio 01 - Calculadora de Áreas</title>
</head>

<body>
  <header id="top">
    <h1 id="title-principal">Calculadora de áreas</h1>
  </header>

  <!-- Primeiro formulário para escolher a forma -->
  <form action="" method="post">
    <label for="opcoes">Calcular a área de:</label>
    <select id="opcoes" name="opcoes">
      <option value="circulo" <?php echo (isset($_POST['opcoes']) && $_POST['opcoes'] == 'circulo') ? 'selected' : ''; ?>>Círculo</option>
      <option value="triangulo" <?php echo (isset($_POST['opcoes']) && $_POST['opcoes'] == 'triangulo') ? 'selected' : ''; ?>>Triângulo</option>
      <option value="quadrado" <?php echo (isset($_POST['opcoes']) && $_POST['opcoes'] == 'quadrado') ? 'selected' : ''; ?>>Quadrado</option>
      <option value="retangulo" <?php echo (isset($_POST['opcoes']) && $_POST['opcoes'] == 'retangulo') ? 'selected' : ''; ?>>Retângulo</option>
    </select>

    <input type="submit" value="Escolher">
  </form>

  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['opcoes'])) {
    $escolha = $_POST['opcoes'];

    // Segundo formulário para os dados específicos
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='opcoes' value='$escolha'>";

    switch ($escolha) {
      case 'circulo':
        echo "
                <label for='raio'>Raio:</label>
                <input type='number' name='raio' id='raio' class='input-number' step='0.01' required>
                ";
        break;

      case 'triangulo':
        echo "
                <label for='base'>Base:</label>
                <input type='number' name='base' id='base' class='input-number' step='0.01' required>
                
                <label for='altura'>Altura:</label>
                <input type='number' name='altura' id='altura' class='input-number' step='0.01' required>
                ";
        break;

      case 'quadrado':
        echo "
                <label for='lado'>Lado:</label>
                <input type='number' name='lado' id='lado' class='input-number' step='0.01' required>
                ";
        break;

      case 'retangulo':
        echo "
                <label for='base'>Base:</label>
                <input type='number' name='base' id='base' class='input-number' step='0.01' required>
                
                <label for='altura'>Altura:</label>
                <input type='number' name='altura' id='altura' class='input-number' step='0.01' required>
                ";
        break;
    }

    echo "<input type='submit' value='Calcular Área'>";
    echo "</form>";
  }

  function NumeroNegativo($valor)
  {
    return $valor < 0;
  }

  // Cálculo e exibição do resultado
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['opcoes'])) {
    $escolha = $_POST['opcoes'];
    $resultado = "";

    switch ($escolha) {
      case 'circulo':
        if (isset($_POST['raio'])) {
          $raio = floatval($_POST['raio']);

          if (NumeroNegativo($raio)) {
            echo "<p style='color: red;'>Erro: O raio não pode ser negativo!</p>";
          } else {
            $resultado = pi() * $raio * $raio;
            echo "<p>Área do círculo: " . number_format($resultado, 2, ',', '.') . " cm²</p>";
          }
        }
        break;

      case 'triangulo':
        if (isset($_POST['base']) && isset($_POST['altura'])) {
          $base = floatval($_POST['base']);
          $altura = floatval($_POST['altura']);

          if (NumeroNegativo($base) || NumeroNegativo($altura)) {
            echo "<p style='color: red;'>Erro: Base e altura não podem ser negativos!</p>";
          } else {
            $resultado = ($base * $altura) / 2;
            echo "<p>Área do triângulo: " . number_format($resultado, 2, ',', '.') . " cm²</p>";
          }
        }
        break;

      case 'quadrado':
        if (isset($_POST['lado'])) {
          $lado = floatval($_POST['lado']);

          if (NumeroNegativo($lado)) {
            echo "<p style='color: red;'>Erro: O lado não pode ser negativo!</p>";
          } else {
            $resultado = $lado * $lado;
            echo "<p>Área do quadrado: " . number_format($resultado, 2, ',', '.') . " cm²</p>";
          }
        }
        break;

      case 'retangulo':
        if (isset($_POST['base']) && isset($_POST['altura'])) {
          $base = floatval($_POST['base']);
          $altura = floatval($_POST['altura']);

          if (NumeroNegativo($base) || NumeroNegativo($altura)) {
            echo "<p style='color: red;'>Erro: Base e altura não podem ser negativos!</p>";
          } elseif ($base == $altura) {
            echo "<p style='color: orange;'>A base e altura possuem o mesmo valor! Portanto é um quadrado!</p>";
          } else {
            $resultado = $base * $altura;
            echo "<p>Área do retângulo: " . number_format($resultado, 2, ',', '.') . " cm²</p>";
          }
        }
        break;
    }
  }
  ?>
</body>

</html>