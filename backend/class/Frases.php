<?php

  class Frases {
    const FILE = 'fichero.txt';
    private $numeroFilas;
    private $conjuntoFrases;

    public function __construct() {
      $this->conjuntoFrases = file(self::FILE);
      $this->numeroFilas = count($this->conjuntoFrases);
    }

    public function randomLine() {
      $randNumber = mt_rand(0, $this->numeroFilas - 1);
      $number = $randNumber + 1;
      return "Frase {$number} / {$this->numeroFilas}: {$this->conjuntoFrases[$randNumber]}";
    }
  }

?>