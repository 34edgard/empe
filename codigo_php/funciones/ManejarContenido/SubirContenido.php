<?php

(function (){
  global $subirContenido;
  $subirContenido = function (){
  extract($_POST);
  
    (new Contenido)->subir([$titulo,
    $autor,
    date('Y-m-d'),
    $categoria,
    $tipo_contenido,
    './src/img/'.basename($_FILES["file"]["name"]),
    $descripcion]);

  echo "la imen ".$_FILES['file']['name'];


  };

  })();
