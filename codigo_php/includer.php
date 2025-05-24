<?php

function listarArchivosEnDirectorio($directorio)
{
  // Verificar si el directorio existe
  if (!is_dir($directorio)) {
    return "El directorio no existe.";
  }

  // Inicializar un arreglo para almacenar los nombres de los archivos
  $archivos = [];

  // Abrir el directorio
  if ($gestor = opendir($directorio)) {
    while (false !== ($archivo = readdir($gestor))) {
      // Ignorar los directorios '.' y '..'
      if ($archivo !== "." && $archivo !== "..") {
        $rutaArchivo = $directorio . "/" . $archivo;

        if (
          is_file($rutaArchivo) &&
          pathinfo($archivo, PATHINFO_EXTENSION) === "php"
        ) {
          $archivos[] = $archivo;
        } elseif (is_dir($rutaArchivo)) {
          $subArchivos = listarArchivosEnDirectorio($rutaArchivo);
          if (!empty($subArchivos)) {
            $archivos[$archivo] = $subArchivos;
          }
        }
      }
    }
    closedir($gestor);
  }

  return $archivos;
}

function incluirArchivos($archivos, $url)
{
  foreach ($archivos as $indice => $archivo) {
    if (is_string($archivo)) {
      include $url . $archivo;
    } elseif (is_array($archivo)) {
      incluirArchivos($archivo, $url . $indice . "/");
    }
  }
}

$urlF = __DIR__ . "/funciones/";
$urlC = __DIR__ . "/clases/";
$urlCf = __DIR__ . "/configuracion/";
//echo __DIR__;
$clases = listarArchivosEnDirectorio($urlC);
$conf = listarArchivosEnDirectorio($urlCf);
$funciones = listarArchivosEnDirectorio($urlF);
//print_r($conf);
//print_r($urlCf);

incluirArchivos($conf, $urlCf);
incluirArchivos($clases, $urlC);
incluirArchivos($funciones, $urlF);

