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
print_r($arreglo);
    if (password_verify($contrasenaLogin, $arreglo[0]['contrasena'])) {
      return [true, $arreglo];
    } else {
      return [false];
    }
  };
})();
