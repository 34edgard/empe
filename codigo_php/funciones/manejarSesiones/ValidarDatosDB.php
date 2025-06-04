<?php
(function () {
  global $ValidarDatosDB;
  $ValidarDatosDB = function ($emailLogin, $contrasenaLogin) {
    $usuario = new Administrador();
    $arreglo = $usuario->consultarDatos([
      "campos" => [
        "email",
        "id",
        "nombre",
        "contrasena",
        "fecha_registro",
        "TipoDeUsuario",
      ],
      "where" => [
        [
          "campo" => "email",
          "operador" => "=",
          "valor" => $emailLogin,
        ],
      ],
    ]);
    echo __line__." del archivo ".__file__."\n";
print_r($arreglo);
    if (password_verify($contrasenaLogin, $arreglo[0]['contrasena']) ) {
      return [true, $arreglo];
    } 
      return [false];
    
  };
})();
