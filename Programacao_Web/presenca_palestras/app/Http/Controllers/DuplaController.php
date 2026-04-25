<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuplaController extends Controller
{
  public function dupla()
  {
    $integrantes = [
      'João Silva',  // Substitua pelo nome do primeiro integrante
      'Maria Santos' // Substitua pelo nome do segundo integrante
    ];

    return view('dupla', compact('integrantes'));
  }
}
