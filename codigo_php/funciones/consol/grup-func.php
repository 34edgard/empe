<?php

// Función para crear una carpeta y archivos dentro de ella
function grup_func($carpeta, $archivos)
{
  // Crear la carpeta
  $urlFunc = "./codigo_php/funciones/";
  if (!mkdir($urlFunc . $carpeta, 0755, true)) {
    echo "Error al crear la carpeta $carpeta\n";
    return;
  }

  // Crear los archivos dentro de la carpeta
  foreach ($archivos as $archivo) {
    $plantilla = "(function(){\n global $".$archivo."; \n $".$archivo." = function(){\n\n}; \n })();";
    $archivo_path = $urlFunc . $carpeta . "/" . $archivo .".php";
    if (file_put_contents($archivo_path, $plantilla) === false) {
      echo "Error al crear el archivo $archivo_path\n";
    } else {
      echo "Archivo $archivo_path creado con éxito\n";
    }
  }
}
