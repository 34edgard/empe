<?php
include "./codigo_php/includer.php";
// Comprobar si se pasó el comando y los argumentos
if ($argc > 1 && $argv[1] === "grup-func") {
  if ($argc < 3) {
    echo "Uso: php script.php grup-func nombreCarpeta archivo1 archivo2 ...\n";
    exit(1);
  }

  $carpeta = $argv[2];
  $archivos = array_slice($argv, 3);
  grup_func($carpeta, $archivos);
} else {
  echo "Comando no encontrado. Usa: php script.php grup-func nombreCarpeta archivo1 archivo2 ...\n";
}





