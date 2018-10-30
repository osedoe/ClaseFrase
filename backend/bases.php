<?php
spl_autoload_register(
  function ($className) {
    // Ruta de la clase
    $path = $_SERVER['DOCUMENT_ROOT'] . "/class/{$className}.php";  
    if (file_exists($path)) {
      require_once($path);
    }
});

?>