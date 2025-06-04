<?php
include "./codigo_php/includer.php";
// Comprobar si se pasó el comando y los argumentos
if ($argc > 1 ) {
  if ($argc < 3) {
  echo "Uso: php script.php grup-func nombreCarpeta archivo1 archivo2 ...\n";

    exit(1);
  }
  switch ($argv[1]) {
    case 'grup_func':
      
  $carpeta = $argv[2];
  $archivos = array_slice($argv, 3);
  grup_func($carpeta, $archivos);

      break;
    
    default:
  # code...
   echo "no se a encontrado el comando";
      break;
  }
} else {
  echo "Comando no encontrado. Usa: php script.php grup-func nombreCarpeta archivo1 archivo2 ...\n";
   echo "use uno de los siguientes comandos ...\n";
    $listaComandos = ['grup-func','grup-class','add-func','add-class'];
    foreach ($listaComandos as $key => $comando) {
         echo ($key+1).") {$comando} \n ";
  
    }
  
}





