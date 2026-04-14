<?php
require_once "Retangulo.php";

$res = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Corrigido: == em vez de =
  $larg = $_POST['largura'];
  $alt = $_POST['altura'];

  $ret = new Retangulo($larg, $alt);
  
  // Concatenando todas as informações
  $res .= "Largura: " . $ret->getLarg() . "<br>";
  $res .= "Altura: " . $ret->getAlt() . "<br>";
  $res .= "Área: " . $ret->CalcularArea() . "<br>";
  $res .= "Perímetro: " . $ret->CalcularPerimetro() . "<br>";
  
  // Verificando se é quadrado
  if ($ret->EhQuadrado()) {
    $res .= "É um Quadrado";
  } else {
    $res .= "Não é um Quadrado";  
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/public/css/style.css">
  <title>Exercicio 01 - Exemplo POO retangulo</title> <!-- Corrigido: Exemplo -->
</head>

<body>
  <header id="top">
    <h1 id="title">Exercicio 01 - Retangulo com POO (PHP)</h1>
  </header>

  <section id="section-form">
    <form action="" method="post" id="forms-post"> 
      <section class="section-ground"> 
        <input type="number" name="largura" class="input-number" step="0.01" required> 
        <label for="largura">Largura</label>
      </section>

      <section class="section-ground"> 
        <input type="number" name="altura" class="input-number" step="0.01" required> 
        <label for="altura">Altura</label>
      </section>

      <input type="submit" id="input-submit" value="Enviar">
    </form>

    <div class="resultado">
      <?php
      if ($res != "") {
        echo $res;
      }
      ?>
    </div>
  </section>
</body>

</html>