<?php
  // Incluímos la base de la aplicación web
  include($_SERVER['DOCUMENT_ROOT'] . '/bases.php');
  
$frases = new Frases();
echo $frases->randomLine();

  
?>
