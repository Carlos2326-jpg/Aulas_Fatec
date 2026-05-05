<?php

class Retangulo
{
  //atributos
  private $larg;
  private $alt;

  //getterss and setters
  public function getLarg()
  {
    return $this->larg;
  }

  public function setAlt($newAlt)
  {
    if ($newAlt > 0) {
      $this->alt = $newAlt;
    }
  }

  public function getAlt()
  {
    return $this->alt;
  }

  public function setLarg($newLarg)
  {
    if ($newLarg > 0) {
      $this->larg = $newLarg;
    }
  }

  //Construtor 
  public function __construct($larg = 1, $alt = 1)
  {
    $this->larg = $larg;
    $this->alt = $alt;
  }

  //Métodos
  public function CalcularPerimetro(){
    return (2 * ( $this->larg + $this->alt ));
  }

  public function CalcularArea() {
    return $this->alt * $this->larg;
  }

  public function EhQuadrado() {
    return $this->alt == $this->alt;
  }
}
